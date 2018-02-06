//= require jquery/dist/jquery.min
//= require foundation-sites/dist/foundation
//= require markerclusterer.min.js
//= require highcharts
var wasMobile = false;

function initialNavbarSetup() {
  var currentBrowserWidth = $(window).width();

  if (currentBrowserWidth < 640) {
    mobileStdTestsNavSetup();
  } else {
    desktopStdTestsNavSetup();
  }

  return;
}

function insertStdTestsNav(stdTestListElement) {
  // remove existing std test list items
  $('#navbar-std-tests').remove();
  $('#std-tests-dropdown').remove();

  $('#navbar').children().first().after(stdTestListElement);

  return;
}

function mobileStdTestsNavSetup() {
  var mobileStdTestsNav = 
    '<li id="navbar-std-tests">' +
      '<ul class="vertical menu" data-accordion-menu>' +
        '<li>' +
          '<a href="#">STD Tests</a>' +
          '<ul class="menu vertical nested">' +
            '<li><a href="/chlamydia-testing">Chlamydia</a></li>' +
            '<li><a href="/gonorrhea-testing">Gonorrhea</a></li>' +
            '<li><a href="/herpes-testing">Herpes</a></li>' +
            '<li><a href="/hepatitis-testing">Hepatitis</a></li>' +
            '<li><a href="/syphilis-testing">Syphilis</a></li>' +
          '</ul>' +
        '</li>' +
      '</ul>' +
    '</li>';

    insertStdTestsNav(mobileStdTestsNav);
    wasMobile = true;

    return;
}

function desktopStdTestsNavSetup() {
  var desktopStdTestsNav =
    '<li id="navbar-std-tests" data-toggle="std-tests-dropdown">STD Tests <span class="down-caret">&#9660;</span></li>' +
      '<div class="dropdown-pane" id="std-tests-dropdown" data-dropdown data-hover="true" data-hover-pane="true" data-hover-delay="0">' +
        '<ul class="menu">' +
          '<li><a href="/chlamydia-testing">Chlamydia</a></li><br>' +
          '<li><a href="/gonorrhea-testing">Gonorrhea</a></li><br>' +
          '<li><a href="/herpes-testing">Herpes</a></li><br>' +
          '<li><a href="/hepatitis-testing">Hepatitis</a></li><br>' +
          '<li><a href="/syphilis-testing">Syphilis</a></li><br>' +
        '</ul>' +
      '</div>' +
    '</li>';

    insertStdTestsNav(desktopStdTestsNav);
    wasMobile = false;

    return;
}

$(document).ready(function() {

  initialNavbarSetup();
  $(document).foundation();

  // when window resizes, see if we need to switch
  // from mobile navbar to desktop version and vice versa
  $(window).resize(function() {
    var currentBrowserWidth = $(window).width();

    // switch from mobile to desktop
    if (wasMobile && currentBrowserWidth >= 640) {
      desktopStdTestsNavSetup();
      $('#navbar').foundation();

    // switch from desktop to mobile
    } else if (!wasMobile && currentBrowserWidth < 640) {
      mobileStdTestsNavSetup();
      $('#navbar').foundation();
    }
  });
});
