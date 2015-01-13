@extends('layout.main')

@section('content')

<div class="panel panel-primary">
 <div class="panel-heading">
    <h3 class="panel-title">Panel primary</h3>
  </div>
  <div class="panel-body">
<table id="table" class="table table-striped table-hover ">
	 <thead>
    <tr>
      <th>#</th>
      <th>Player</th>
      <th></th>
      <th>Total Matches Played</th>
      <th>Total Runs</th>
      <th>Club Name</th>
      <th>Runs in last 4 matches</th>
      <th></th>
      </tr>
  </thead>
  <tbody id="body">
    <tr class="active">
      <td>1</td>
      <td>{{ Playerinfo::find('1')->name }}</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
      <td>{{ Playerinfo::find('1')->total_matches }}</td>
      <td>{{ Playerinfo::find('1')->total_runs }}</td>
      <td>{{ Playerinfo::find('1')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('1')->runs_last_4 }}</td>
      <td>{{ '<a id="button" href="#" class="btn btn-danger">Remove</a>'}}</td>
    </tr>
    <tr class="active">
      <td>2</td>
      <td>{{ Playerinfo::find('2')->name }}</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
      <td>{{ Playerinfo::find('2')->total_matches }}</td>
      <td>{{ Playerinfo::find('2')->total_runs }}</td>
      <td>{{ Playerinfo::find('2')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('2')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>3</td>
      <td>{{ Playerinfo::find('3')->name }}</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
      <td>{{ Playerinfo::find('3')->total_matches }}</td>
      <td>{{ Playerinfo::find('3')->total_runs }}</td>
      <td>{{ Playerinfo::find('3')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('3')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>4</td>
      <td>{{ Playerinfo::find('4')->name }}</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
      <td>{{ Playerinfo::find('4')->total_matches }}</td>
      <td>{{ Playerinfo::find('4')->total_runs }}</td>
      <td>{{ Playerinfo::find('4')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('4')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>5</td>
      <td>{{ Playerinfo::find('5')->name }}</td>
      <td><img src="{{ asset('/files/baticon25.png') }}"></td>
      <td>{{ Playerinfo::find('5')->total_matches }}</td>
      <td>{{ Playerinfo::find('5')->total_runs }}</td>
      <td>{{ Playerinfo::find('5')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('5')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>6</td>
      <td>{{ Playerinfo::find('6')->name }}</td>
      <td><img src="{{ asset('/files/keepericon.jpg') }}"></td>
      <td>{{ Playerinfo::find('6')->total_matches }}</td>
      <td>{{ Playerinfo::find('6')->total_runs }}</td>
      <td>{{ Playerinfo::find('6')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('6')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>7</td>
      <td>{{ Playerinfo::find('7')->name }}</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
      <td>{{ Playerinfo::find('7')->total_matches }}</td>
      <td>{{ Playerinfo::find('7')->total_runs }}</td>
      <td>{{ Playerinfo::find('7')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('7')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>8</td>
      <td>{{ Playerinfo::find('8')->name }}</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
      <td>{{ Playerinfo::find('8')->total_matches }}</td>
      <td>{{ Playerinfo::find('8')->total_runs }}</td>
      <td>{{ Playerinfo::find('8')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('8')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>9</td>
      <td>{{ Playerinfo::find('9')->name }}</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
      <td>{{ Playerinfo::find('9')->total_matches }}</td>
      <td>{{ Playerinfo::find('9')->total_runs }}</td>
      <td>{{ Playerinfo::find('9')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('9')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>10</td>
      <td>{{ Playerinfo::find('10')->name }}</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
      <td>{{ Playerinfo::find('10')->total_matches }}</td>
      <td>{{ Playerinfo::find('10')->total_runs }}</td>
      <td>{{ Playerinfo::find('10')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('10')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>11</td>
      <td>{{ Playerinfo::find('11')->name }}</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
      <td>{{ Playerinfo::find('11')->total_matches }}</td>
      <td>{{ Playerinfo::find('11')->total_runs }}</td>
      <td>{{ Playerinfo::find('11')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('11')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>12</td>
      <td>{{ Playerinfo::find('12')->name }}</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
      <td>{{ Playerinfo::find('12')->total_matches }}</td>
      <td>{{ Playerinfo::find('12')->total_runs }}</td>
      <td>{{ Playerinfo::find('12')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('12')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>13</td>
      <td>{{ Playerinfo::find('13')->name }}</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
      <td>{{ Playerinfo::find('13')->total_matches }}</td>
      <td>{{ Playerinfo::find('13')->total_runs }}</td>
      <td>{{ Playerinfo::find('13')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('13')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
    <tr class="active">
      <td>14</td>
      <td>{{ Playerinfo::find('14')->name }}</td>
      <td><img src="{{ asset('/files/batandball.png') }}"></td>
      <td>{{ Playerinfo::find('14')->total_matches }}</td>
      <td>{{ Playerinfo::find('14')->total_runs }}</td>
      <td>{{ Playerinfo::find('14')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('14')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
     <tr class="active">
      <td>15</td>
      <td>{{ Playerinfo::find('15')->name }}</td>
      <td><img src="{{ asset('/files/ballicon.png') }}"></td>
      <td>{{ Playerinfo::find('15')->total_matches }}</td>
      <td>{{ Playerinfo::find('15')->total_runs }}</td>
      <td>{{ Playerinfo::find('15')->club_name }}</td>
      <td class="runs">{{ Playerinfo::find('15')->runs_last_4 }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/JS/script.js') }} "></script>
@stop