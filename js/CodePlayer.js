function updateOutput() {
    $("iframe").contents()
    .find("html")
    .html("<html><head><style type='text/css'>" + $("#cssPanel").val() + "</style></head><body>" + $("#htmlPanel")
    .val() + "</body></html>");

    document.getElementById("outputPanel").contentWindow.eval($("#javascriptPanel").val());
}

// Highlight button on hover
$(".toggleButton").hover(function() {
    $(this).addClass("highlightedButton");
}, function() {
    $(this).removeClass("highlightedButton");
});

// change button color when clicked and show/hide panels
$(".toggleButton").click(function() {
    $(this).toggleClass("active");
    $(this).removeClass("highlightedButton");
    let panelId = $(this).attr("id") + "Panel";
    $("#" + panelId).toggleClass("hidden");
    let numberOfActivePanels = 4 - $(".hidden").length;
    $(".panel").width(($(window).width() / numberOfActivePanels) - 80);
});

// resize pannel height
$(".panel").height($(window).height() - $("#header").height() - 15);

// resize panel width
$(".panel").width(($(window).width() / 2) - 80);

updateOutput();

$("textarea").on("load change keyup paste", function() {
    updateOutput();
})