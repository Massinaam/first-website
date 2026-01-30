<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>iCalendar Events</title>
  <script src="https://cdn.jsdelivr.net/npm/ics.js/dist/ics.min.js"></script>
</head>
<body>
  <h1>iCalendar Events</h1>
  <ul id="eventList"></ul>

  <script>
    ics.parseURL('path/to/your/ics/calendar.ics').then(function(data) {
      var events = data.vcALENDAR.VCEVENT;

      var eventList = document.getElementById('eventList');

      events.forEach(function(event) {
        var listItem = document.createElement('li');
        var header = document.createElement('h2');
        var dateRange = document.createElement('p');
        var description = document.createElement('p');

        header.textContent = event.SUMMARY.value;
        dateRange.textContent = 'From ' + event.DTSTART.value + ' to ' + event.DTEND.value;
        description.textContent = event.DESCRIPTION.value;

        listItem.appendChild(header);
        listItem.appendChild(dateRange);
        listItem.appendChild(description);
        eventList.appendChild(listItem);
      });
    });
  </script>
</body>
</html>
