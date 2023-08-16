@extends('layouts.frontend.master')

@section('content')
    <section class="search-box">
        <div class="container">
            <div class="search-box-text">
                <h1>SEARCH BLOOD DONORS</h1>
            </div>
            <div class="search-box-details">
                <div class="row">
                    <div class="col-md-4">
                        <form>
                            <label class="state-select">State (Province No.)</label><br>
                            <select class="state" id="state-select" name="">
                                <option value="" selected disabled="disabled">Select</option>
                                <option value="state-select">Province NO.7</option>
                                <option value="state-select">Province NO.6</option>
                                <option value="state-select">Province NO.5</option>
                                <option value="state-select">Province NO.4</option>
                                <option value="state-select">Province NO.3</option>
                                <option value="state-select">Province NO.2</option>
                                <option value="state-select">Province NO.1</option>
                            </select><br>
                            <label class="blood-select">Blood Group</label><br>
                            <select class="blood" id="blood-select" name="blood-group">
                                <option value="" selected disabled="disabled">Select</option>
                                <option value="blood-group">A+</option>
                                <option value="blood-group">A-</option>
                                <option value="blood-group">B+</option>
                                <option value="blood-group">B-</option>
                                <option value="blood-group">AB+</option>
                                <option value="blood-group">AB-</option>
                                <option value="blood-group">O+</option>
                                <option value="blood-group">O-</option>
                            </select><br>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form>
                            <label class="district-select">District</label><br>
                            <select class="district" id="district-select" name="place">
                                <option value="" selected disabled="disabled">Select</option>
                                <option value="place">Kathmandu</option>
                                <option value="place">Dhading</option>
                                <option value="place">Bhaktapur</option>
                                <option value="place">Pokhara</option>
                                <option value="place">Dhangadhi</option>
                                <option value="place">Palpa</option>
                                <option value="place">Gorkha</option>
                                <option value="place">Nuwakot</option>
                                <option value="place">Lalitpur</option>
                                <option value="place">Chitwan</option>
                                <option value="place">Rasuwa</option>
                                <option value="place">Solukhumbu</option>
                                <option value="place">Manang</option>
                                <option value="place">Mugu</option>
                            </select><br>
                        </form><br>
                        <button class="search-btn"><a href="#">Search</a></button>
                    </div>
                    <div class="col-md-4">
                        <label class="city-select">City</label><br><input type="text" name=""
                            placeholder="city"><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
