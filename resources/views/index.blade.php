<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <div class="col-10 container">
    <h1>Quiz App</h1>
   <table class=table>
<tr scope="row">
<th scope="col">#</th>
<th scope="col">Question</th>
<th scope="col">option a</th>
<th  scope="col">option b</th>
<th scope="col">option c</th>
<th scope="col">option d</th>
<th scope="col"></th>
</tr>
@foreach($question as $q)
<tr scope="row">
<th scope="col">
   {{$q->id}}
</th>  
<th scope="col">
   {{$q->question}}
</th> 
<th scope="col"><div class="form-check">
  <input class="form-check-input" type="radio" value="" name="{{$q->id}}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   {{$q->optionA}}
  </label>
</div></th> 
<th scope="col"><div class="form-check">
  <input class="form-check-input" type="radio" value="" name="{{$q->id}}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   {{$q->optionB}}
  </label>
</div></th> 
<th scope="col"><div class="form-check">
  <input class="form-check-input" type="radio" value="" name="{{$q->id}}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   {{$q->optionC}}
  </label>
</div></th> 
<th scope="col"><div class="form-check">
  <input class="form-check-input" type="radio" value="" name="{{$q->id}}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   {{$q->optionD}}
  </label>
</div></th> 
</tr>
@endforeach
   </table>
 {{ $question->links('pagination::bootstrap-4') }}
    </div>
</body>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</html>