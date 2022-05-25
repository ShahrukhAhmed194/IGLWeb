@extends('backend.layout.workExpTemplate')

@section('title','Family Information')
@section('content')
@php
  $phone = session('phone');   
@endphp
  <div class="container">
      <h1 class="text-center"><b>Family Information</b></h1>
      <p class="text-center"><b>Please Provide Information as Given Below.</b></p>
      <hr>

      <form action="{{route('save-family')}}" method="POST" >  
        @csrf
        <div class="container">
            <input type="hidden" name="number" value="{{$phone}}">
            <h1 ><b>Father's Information.</b></h1>
            <div class="row box">                
                <div class="col-md-6 col-sm-12">
                    <label for="father_name"><b>Father Name : </b></label>
                    <input type="text" placeholder="Enter Father Name" name="father_name" id="father_name" value="{{old('father_name')}}" >
                    @error('father_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                    <label for ="father_occupation"><b>Occupation : </b></label>
                    <input type="text" placeholder="Father Occupation" name="father_occupation" id="father_occupation" value="{{old('father_occupation')}}" >
                    @error('father_occupation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="father_nid"><b>Father NID : </b></label>
                    <input type="text" onkeydown="validateFatherNID()" placeholder="Enter Father NID" name="father_nid" id="father_nid" value="{{old('father_nid')}}" >
                    <div class="alert alert-danger" id="f_nid_msg"></div>
                    @error('father_nid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="father_mobile"><b>Phone Number : </b></label>
                    <input type="tel" placeholder="01*********" name="father_mobile" id="father_mobile" pattern="[0-1]{2}[0-9]{9}" value="{{old('father_mobile')}}">
                    @error('father_mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                    <label id="father_email"><b>Email : </b></label>
                    <input type="email" placeholder="Father Email" name="father_email" id="father_email" value="{{old('father_email')}}">
                    @error('father_email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <h1 ><b>Mother's Information.</b></h1>
            <div class="row box">                
                <div class="col-md-6 col-sm-12">
                    <label for="mother_name"><b>Mother Name : </b></label>
                    <input type="text" placeholder="Enter Mother Name" name="mother_name" id="mother_name" value="{{old('mother_name')}}">
                    @error('mother_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                    <label for ="mother_occupation"><b>Occupation : </b></label>
                    <input type="text" placeholder="Mother Occupation" name="mother_occupation" id="mother_occupation" value="{{old('mother_occupation')}}">
                    @error('mother_occupation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="mother_nid"><b>Mother NID : </b></label>
                    <input type="text" onkeydown="validateMotherNID()" placeholder="Enter Mother NID" name="mother_nid" id="mother_nid" value="{{old('mother_nid')}}">
                    <div class="alert alert-danger" id="m_nid_msg"></div>
                    @error('mother_nid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="mother_mobile"><b>Phone Number : </b></label>
                    <input type="tel" placeholder="01*********" name="mother_mobile" id="mother_mobile" pattern="[0-1]{2}[0-9]{9}" value="{{old('mother_mobile')}}">
                    @error('mother_mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                    <label for="mother_email"><b>Email : </b></label>
                    <input type="email" placeholder="Mother Email" name="mother_email" id="mother_email" value="{{old('mother_email')}}">
                    @error('mother_email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <h1 ><b>Siblings.</b></h1>
            <div class="row box">                
                <div class="col-md-6 col-sm-12">
                    <label for="brothers"><b>Brothers : </b></label>
                    <input type="text" placeholder="Put 0 If Not Any" name="brothers" id="brothers" value="{{old('brothers')}}">
                    @error('brothers')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">  
                    <label for="sisters"><b>Sisters : </b></label>
                    <input type="text" placeholder="Put 0 If Not Any" name="sisters" id="sisters" value="{{old('sisters')}}">
                    @error('sisters')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>                        
            </div>
        </div>
        <button id="button" type="submit">Complete </button>
      </form>
      <nav aria-label="...">
        <ul class="pagination">
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        <li class="page-item">
            <span class="page-link" onclick="submitFunction()">Next</span>
        </li>
        </ul>
    </nav>
  </div>

  <script>
      $('f_nid_msg').hide();
      $('m_nid_msg').hide();
      $(document).ready(function(){
          $('#button').hide();
          
      });

      function submitFunction(){
        $('#button').click();
      }

      function validateFatherNID(){
        let nid;
        nid = $('#father_nid').val();
        nid_len = $('#father_nid').val().length;

        if(isNaN(nid)){
            $('#f_nid_msg').text('NID or Birth Certificate must be digiis only');
            $('#f_nid_msg').show();
        }
        else{
            if(nid==0){
                $('#f_nid_msg').hide();     
            }
            else{
                if(nid_len!=10 && nid_len!=17 ){
                $('#f_nid_msg').text('NID or Birth Certificate must be 10 or 17 digits');
                $('#f_nid_msg').show();

                }else{
                    $('#f_nid_msg').hide();

                }

            }
        }
      }

      function validateMotherNID(){
        let nid;
        nid = $('#mother_nid').val();
        nid_len = $('#mother_nid').val().length;

        if(isNaN(nid)){
            $('#m_nid_msg').text('NID or Birth Certificate must be digiis only');
            $('#m_nid_msg').show();
        }
        else{
            if(nid==0){
                $('#m_nid_msg').hide();     
            }
            else{
                if(nid_len!=10 && nid_len!=17 ){
                $('#m_nid_msg').text('NID or Birth Certificate must be 10 or 17 digits');
                $('#m_nid_msg').show();

                }else{
                    $('#m_nid_msg').hide();

                }

            }      
            
        }
      }
  </script>

@endsection