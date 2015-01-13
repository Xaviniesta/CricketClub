@extends('layout.main')

@section('content')
<div class="panel panel-primary">
 <div class="panel-heading">
    <h3 class="panel-title">Players</h3>
  </div>
  <div class="panel-body">
<table  class="table table-striped table-hover ">	 
	 <thead>
    <tr>
      <th>#</th>
      <th>Player</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr class="active">
      <td>1</td>
      <td>Ambati Rayudu</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
    </tr>
    <tr class="active">
      <td>2</td>
      <td>Shikhar Dhawan</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
    </tr>
    <tr class="active">
      <td>3</td>
      <td>Ajinkya Rahane</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
    </tr>
    <tr class="active">
      <td>4</td>
      <td>Virat Kohli</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
    </tr>
    <tr class="active">
      <td>5</td>
      <td>Rohit Sharma</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
    </tr>
    <tr class="active">
      <td>6</td>
      <td>MS Dhoni</td>
      <td><img src="{{ asset('/files/keepericon.jpg') }}"></td>
    </tr>
    <tr class="active">
      <td>7</td>
      <td>Ravindra Jadeja</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
    </tr>
    <tr class="active">
      <td>8</td>
      <td>Ravinchandran Ashwin</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
    </tr>
    <tr class="active">
      <td>9</td>
      <td>Buvneshwar Kumar</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
    </tr>
    <tr class="active">
      <td>10</td>
      <td>Mohammad Shami</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
    </tr>
    <tr class="active">
      <td>11</td>
      <td>Ishant Sharma</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
    </tr>
    <tr class="active">
      <td>12</td>
      <td>Suresh Raina</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
    </tr>
    <tr class="active">
      <td>13</td>
      <td>Umesh Yadav</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
    </tr>
    <tr class="active">
      <td>14</td>
      <td>Stuart Binny</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
    </tr>
     <tr class="active">
      <td>15</td>
      <td>Axar Patel</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
@stop