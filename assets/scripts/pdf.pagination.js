// If absolute URL from the remote server is provided, configure the CORS
// header on that server.
// var url = './2017/2017 Writing Anthology.pdf';

// The workerSrc property shall be specified.
PDFJS.workerSrc = './assets/scripts/pdf.worker.js';

var pdfDoc = null,
    start = 0,
    end = 0,
    pageNum = 0,
    pageRendering = false,
    pageNumPending = null,
    scale = 2.0,
    canvas = document.getElementById('the-canvas'),
    ctx = canvas.getContext('2d');

/**
 * Get page info from document, resize canvas accordingly, and render page.
 * @param num Page number.
 */
function renderPage(num) {
  pageRendering = true;
  // Using promise to fetch the page
  pdfDoc.getPage(num).then(function(page) {
    var viewport = page.getViewport(scale);
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    // Render PDF page into canvas context
    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
    var renderTask = page.render(renderContext);

    // Wait for rendering to finish
    renderTask.promise.then(function() {
      pageRendering = false;
      if (pageNumPending !== null) {
        // New page rendering is pending
        renderPage(pageNumPending);
        pageNumPending = null;
      }
    });
  });

  // Update page counters
  document.getElementById('page_num').textContent = pageNum - start + 1;
}

/**
 * If another page rendering in progress, waits until the rendering is
 * finised. Otherwise, executes rendering immediately.
 */
function queueRenderPage(num) {
  if (pageRendering) {
    pageNumPending = num;
  } else {
    renderPage(num);
  }
}

/**
 * Displays previous page.
 */
function onPrevPage() {
  if (pageNum <= start) {
    return;
  }
  if (pageNum <= (start + 1)) {
    document.getElementById('prev').classList.add('disabled');
  }
  document.getElementById('next').classList.remove('disabled');
  pageNum--;
  queueRenderPage(pageNum);
}
document.getElementById('prev').addEventListener('click', onPrevPage);

/**
 * Displays next page.
 */
function onNextPage() {
  if (pageNum >= end) {
    return;
  }
  if (pageNum >= (end - 1)) {
    document.getElementById('next').classList.add('disabled');
  }
  document.getElementById('prev').classList.remove('disabled');
  pageNum++;
  queueRenderPage(pageNum);
}
document.getElementById('next').addEventListener('click', onNextPage);

function getArticle(url, s, e) {
  start = s;
  end = e;
  pageNum = start;
  /**
   * Asynchronously downloads PDF.
   */
  PDFJS.getDocument(url).then(function(pdfDoc_) {
    pdfDoc = pdfDoc_;

    document.getElementById('page_count').textContent = end - start + 1;
    if (start == end) {
      document.getElementById('paginator').classList.add('d-none');
    } else {
      document.getElementById('prev').classList.add('disabled');
    }
    // Initial/first page rendering
    renderPage(pageNum);
  });
}