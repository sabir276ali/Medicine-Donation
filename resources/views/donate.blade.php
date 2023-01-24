<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate.mds</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="mdshome.css">
    <script src="https://kit.fontawesome.com/9c87203289.js" crossorigin="anonymous"></script>

</head>
<div class="form-data">
    <div class="container" id="dataform">
    @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
    @endif
    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
    @endif
    <form action="{{ route('donation.store') }}" method="post" >
        @csrf
    <fieldset>
        <H3 style="color:rgb(236,199,49); padding-left: 31%; padding-top: 20px; " >
            
            <Span >
                Make a Donation who need helps
            </Span>
        </H3>
        <hr style="height: 4px; background-color:rgb(236,199,49); width: 40%; border-radius: 20%; margin-left: 325px;">
     <label for="Project"> Project you want to Donate for</label> 
     <br>
       <input type="text" name="project">
       <br>

       <label for="Category">Select Medicine Category</label>
   <br>
     <select  name="medicine" id="category">
      <option value="Select category">Select category</option>
           <optgroup label="Cholera">
           <option value="Cholera tablet">tablet</option>
           <option value="Cholera injection">injection</option>
           <option value="Cholera antibiotics">antibiotics</option>
           <option value="Cholera Syrup">Syrup</option>
           <option value="Cholera others">others</option>
           </optgroup>
           <optgroup label="Dengue">
            <option value="Dengue tablet">tablet</option>
           <option value="Dengue injection">injection</option>
           <option value="Dengue antibiotics">antibiotics</option>
           <option value="Dengue Syrup">Syrup</option>
           <option value="Dengue others">others</option>
            </optgroup>
            <optgroup label="Hepatitis">
                <option value="Hepatitis tablet">tablet</option>
               <option value="Hepatitis injection">injection</option>
               <option value="Hepatitis antibiotics">antibiotics</option>
               <option value="Hepatitis Syrup">Syrup</option>
               <option value="Hepatitis others">others</option>
                </optgroup>
                <optgroup label="Alzheimer">
                    <option value="Alzheimer tablet">tablet</option>
                   <option value="Alzheimer injection">injection</option>
                   <option value="Alzheimer antibiotics">antibiotics</option>
                   <option value="Alzheimer Syrup">Syrup</option>
                   <option value="Alzheimer others">others</option>
                    </optgroup>
                    <optgroup label="Rotavirus">
                        <option value="Alzheimer tablet">tablet</option>
                       <option value="Alzheimer injection">injection</option>
                       <option value="Alzheimer antibiotics">antibiotics</option>
                       <option value="Alzheimer Syrup">Syrup</option>
                       <option value="Alzheimer others">others</option>
                        </optgroup>
   
      </select>
      <br>
      <br>
      <label for="Your Information">Your Information</label>
        <br>
         <input type="text" placeholder="Name" name="name" value="{{Auth::user()->name}}" autofocus required>
         <br>
         <br>
         <label for="emails">Enter email addresses:</label>
         <br>
           <input type="email" name="email" value="{{Auth::user()->email}}" id="email">
        <br>
        <br>
        <label for="phone">Phone</label>
        <br>
        <input type="number" name="phone">
        <br>
        <br>
        <label for="address">Address</label>
        <br>
        <input type="text" name="address"> 
        <br>
        <br>
        <label for="time-slot"> Time Slot For Medicine Pick-up</label>
        <br>
        
        <input type="datetime-local" id="Pick-up" name="date_time">
<br>
<p class="note">Note:  for medicine  pick-up quantity should be over ten  Small boxes</p>
<label for="comments">Comments</label>
<br>
   <textarea name="comments" id="" cols="30" rows="1"></textarea>
   <br>
     <input type="submit" value="submit" id="submit">
        </fieldset>
       
    </form>
    <br><br><br>
        </div>
      </div