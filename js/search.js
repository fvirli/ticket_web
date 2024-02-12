function searchEventItems() {
  // Obtain the input field and the value
  var input = document.getElementById("search-input");
  var filter = input.value.toUpperCase();

  // Obtain the list of event-items
  var eventItems = document.getElementsByClassName("event-item");

  // Iterate through each event-item and show or hide it based on the search query
  for (var i = 0; i < eventItems.length; i++) {
    var eventTitle = eventItems[i].getElementsByTagName("h4")[0].innerText;

    if (eventTitle.toUpperCase().indexOf(filter) > -1) {
      eventItems[i].style.display = "";
    } else {
      eventItems[i].style.display = "none";
    }
  }
}
