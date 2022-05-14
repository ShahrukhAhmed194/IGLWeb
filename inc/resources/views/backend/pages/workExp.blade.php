@extends('backend.layout.workExpTemplate')

@section('title','Work Experiences')
@section('content')
@php
  $phone = session('phone');   
@endphp
  <div class="container">
      <h1 ><b>Work Experience</b></h1>
      <p ><b>Please fill in this form to create an account.</b></p>
      <hr>
      <input  type="radio" id="fresher" name="work" value="fresher" >
      <label for="fresher" >Fresher </label>&nbsp;&nbsp;&nbsp;

      <input  type="radio" id="experience" name="work" value="experience">
      <label for="experience">Experience </label>&nbsp;&nbsp;&nbsp;
      
      <form action="{{route('save-exp')}}" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="box " id="box">
            <div class="row">
              <input type="hidden" name="number" value="{{$phone}}">
              <input type="hidden" name="work" id="work" value="">
                <div class="col-md-6 col-sm-12">
                  <label id="label_company"><b>Company Name : </b></label>
                  <input type="text" placeholder="Enter Company Name" name="company_name[]" id="company_name" required>
                  @error('company_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                  <label id="label_company_address"><b>Company Address : </b></label>
                  <input type="text" placeholder="Enter Company Address" name="company_address[]" id="company_address" required>
                  @error('company_address')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                  <label id="label_company_mobile"><b>Company  Mobile : </b></label>
                  <input type="tel" placeholder="01*********" name="company_mobile[]" id="company_mobile" pattern="[0-1]{2}[0-9]{9}" required>
                  @error('company_mobile')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                  <label id="label_designation"><b>Designation : </b></label>
                  <input type="text" placeholder="Enter Designation" name="designation[]" id="designation" required>
                  @error('designation')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                  <label id="label_reporting_boss"><b>Company Reporting Boss : </b></label>
                  <input type="text" placeholder="Reporting Boss" name="reporting_boss[]" id="reporting_boss" required>
                  @error('reporting_boss')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                  <label id="label_reason"><b>Leaving Reason : </b></label>
                  <input type="text" placeholder="Reason" name="reason[]" id="reason" required>
                  @error('reason')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>   
                
            </div>
        </div>
        <div id="box2"></div>

        <button class="add-button btn btn-info" type="button" id="add_more" onclick="addMore()">add more </button>
          <br>
          <label id="image" class="star" style="color: black"><b>Photo Passport Size : </b></label>
          <input type="file" id="image" name="image" required>
          <hr>
          <button id="button" type="submit" class="registerbtn btn btn-success">Complete</button>
      </form>
      <nav aria-label="...">
        <ul class="pagination">
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        <li class="page-item">
            <span class="page-link" onclick="submitExp()">Next</span>
        </li>
        </ul>
    </nav>
  </div>


<script>
    $('#box').hide();
    $('#add_more').hide();
    $('#button').hide();

    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            var inputValue = $(this).attr("value");
            if(inputValue == 'experience'){
                $('#box').show();
                $('#add_more').show();
                $('#work').val('experience');
                $('#company_name').val('');
                $('#company_address').val('');
                $('#company_mobile').val('');
                $('#designation').val('');
                $('#reporting_boss').val('');
                $('#reason').val('');
            }
            else{
                $('#box').hide();
                $('#add_more').hide();
                $('#work').val('fresher');
                $('#company_name').val('N/A');
                $('#company_address').val('N/A');
                $('#company_mobile').val('01000000000');
                $('#designation').val('N/A');
                $('#reporting_boss').val('N/A');
                $('#reason').val('N/A');
                
            }
        });
    });

    let loop_count=0;

    function addMore(){
      
        loop_count++;
        let html='<div class="box " id="box_'+loop_count+'"><div class="row">';
        
        html+='<div class="col-md-6 col-sm-12"><label id="label_company"><b>Company Name : </b></label><input type="text" placeholder="Enter Company Name" name="company_name[]" id="company_'+loop_count+'" required></div>';
        html+='<div class="col-md-6 col-sm-12"><label id="label_company_address"><b>Company Address : </b></label><input type="text" placeholder="Enter Company Address" name="company_address[]" id="company_address_'+loop_count+'" required></div>';
        html+='<div class="col-md-6 col-sm-12"><label id="label_company_mobile"><b>Company  Mobile : </b></label><input type="text" placeholder="017********" pattern="[0-1]{2}[0-9]{9}" name="company_mobile[]" id="company_mobile_'+loop_count+'" required></div>';
        html+='<div class="col-md-6 col-sm-12"><label id="label_designation"><b>Designation : </b></label><input type="text" placeholder="Enter Designation" name="designation[]" id="designation_'+loop_count+'" required></div>';
        html+='<div class="col-md-6 col-sm-12"><label id="label_reporting_boss"><b>Company Reporting Boss : </b></label><input type="text" placeholder="Reporting Boss" name="reporting_boss[]" id="reporting_boss_'+loop_count+'" required></div>';
        html+='<div class="col-md-6 col-sm-12"><label id="label_reason"><b>Leaving Reason : </b></label><input type="text" placeholder="Reason" name="reason[]" id="reason_'+loop_count+'" required></div>';
        // html+='<button class="btn btn-danger float-right"style="float:right; margin-right:25px;" name="remove[]" id="remove_'+loop_count+'" onclick="remove(loop_count)">Remove</button>';
        html+= '</div></div>';
        
        $('#box2').append(html);
        // $('#list').val(loop_count);
    }

    function submitExp() {
           $('#button').click();
        }
    // function remove(count){
    //   console.log('#box_'+count)
    // }
</script>
@endsection
    