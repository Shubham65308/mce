<div class="content">
  <link rel="stylesheet" href="home.css">
  <style media="screen">
    h1{font-size: 20px;}
  </style>
<h1>List Of People Attending</h1>
                      <table border="3">


                        <thead>

                          <th>ID</th>

                          <th>Name</th>

                          <th>Ticketno</th>

                        </thead>

                        @foreach($Attendees as $key => $Attendee)

                        <tr>

                          <th>{{$Attendee->id}}</th>

                          <th>{{$Attendee->Firstname}}</th>

                           <th>{{$Attendee->Lastname}}</th>

                          <th>{{$Attendee->Ticketno}}</th>

                      </tr>

                      @endforeach

                      </table>



          </div>
