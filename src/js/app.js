$('.front-page-header').html(function(index, curHTML) {
    var text = curHTML.split(/[\s-]/),
        newtext = '<span class="some">' + text.pop() + '</span>';
    return text.join(' ').concat(' ' + newtext);
  });