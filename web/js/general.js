function activeMenu(a)
{
    for (var i = 0; i <= 9; i++)
    {
        $("#but"+i).removeClass("active");
        $("#content"+i).hide();
    }
    $("#but"+a).toggleClass("active");
    $("#content"+a).show();
}



