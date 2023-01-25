function update() {
    $.get("live.php", function(data) {
      $("#mainchat").html(data);
      window.setTimeout(update, 10000);
    });
  }

function scrollDown(){
    let textarea = document.getElementById("mainchat");
    textarea.scrollTop = textarea.scrollHeight;
}