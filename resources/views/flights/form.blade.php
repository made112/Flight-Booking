<div class="form-group">
    <label for="flight_number">Flight Number</label>
    <input disabled type="text" name="flight_number" id="flight_number" class="form-control" value="{{ old('flight_number', $flight->flight_number ?? '') }}" required>
</div>
<div class="form-group">
    <label for="departure_city">Departure City</label>
    <input type="text" name="departure_city" id="departure_city" class="form-control" value="{{ old('departure_city', $flight->departure_city ?? '') }}" required>
</div>
<div class="form-group">
    <label for="arrival_city">Arrival City</label>
    <input type="text" name="arrival_city" id="arrival_city" class="form-control" value="{{ old('arrival_city', $flight->arrival_city ?? '') }}" required>
</div>
<div class="form-group">
    <label for="travel_date">Travel Date</label>
    <input type="datetime-local" name="travel_date" id="travel_date" class="form-control" value="{{ old('travel_date', $flight->travel_date ?? '') }}" required>
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $flight->price ?? '') }}" required>
</div>
