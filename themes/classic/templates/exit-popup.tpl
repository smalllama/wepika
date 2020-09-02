
<div id="popup" class="popup__wrapper">
    <div id="news-signup_close"></div>
    <div class="popup__container">
        <h1 class="popup__title">Thank you for visiting!</h1>
        <p>Have a wonderful day 💁</p>
    </div>
</div>


<script>
    function onMouseOut(event) {
        // Remove this event listener
        document.removeEventListener("mouseout", onMouseOut);
        
        // Show the popup
        document.getElementById("popup").style.display = "block";
    }

    document.addEventListener("mouseout", onMouseOut);

    this.closebtn = document.getElementById("news-signup_close");
    this.addEvent(this.closebtn, "click", function() {
      bioEp.hidePopup();

</script>

