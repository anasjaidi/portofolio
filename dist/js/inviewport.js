
var inviewport = function (id)
{
  var myElement = document.getElementById(id);
  if (!myElement)
    return false;

    const rect = myElement.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    )
}
