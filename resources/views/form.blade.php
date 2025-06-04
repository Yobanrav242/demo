{{-- importing layout --}}
@extends('layouts.form')
{{-- content start --}}
@section('formContent')
<div class="container mt-5">
    <h2 class="mb-4">Contact Form</h2>
    <form method="POST" action="/store">
        @csrf
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name">
        @error('name')
            <small class="text-danger p-1">{{$message}}</small>
        @enderror
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email">
        @error('email')
            <small class="text-danger p-1">{{$message}}</small>
        @enderror
      </div>

      <!-- Phone -->
      <div class="mb-3">
        <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number">
        @error('phone')
            <small class="text-danger p-1">{{$message}}</small>
        @enderror
      </div>

      <!-- Address -->
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" name="address" rows="3" placeholder="Enter your address"></textarea>
        @error('address')
            <small class="text-danger p-1">{{$message}}</small>
        @enderror
      </div>

      <!-- Dropdown -->
      <div class="mb-3">
        <label for="course" class="form-label">Select an Option <span class="text-danger">*</span></label>
        <select class="form-select" name="course">
          <option selected disabled>Choose...</option>
          <option value="1">MCA</option>
          <option value="2">MBA</option>
          <option value="3">BBA</option>
        </select>
        @error('course')
            <small class="text-danger p-1">{{$message}}</small>
        @enderror
      </div>

      <!-- Radio Buttons -->
      <div class="mb-3">
        <label class="form-label">Gender <span class="text-danger">*</span></label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender"  value="male">
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender"  value="female">
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>

      <!-- Submit -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection