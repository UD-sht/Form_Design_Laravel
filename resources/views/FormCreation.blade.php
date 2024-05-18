<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('cssfile/style.css') }}">
    <title>Form</title>
    
</head>

<body>
        @if(session('success'))
            <div class="alert alert-success" role="alert"
                style="z-index: 10000;text-align: center;border: 1px solid lightgreen;background-color: lightgreen;margin: 5px 500px; padding:15px 20px; border-radius:8px;position:absolute;">
                <strong>Success!</strong> {{ session('success') }}
            </div>
        @endif
    <nav>
        <h1>Form Page</h1>
    </nav>
    <div class="form_container">
        <form action="{{url('/')}}/FormCreation" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 style="color:red;">1. Applicant's Personal Information</h3>
            <div>
                <label for="name" class="required">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name, Surname" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="father_name" class="required">Father's Name:</label>
                <input type="text" id="father_name" name="father_name" placeholder="Name, Surname"
                    value="{{ old('father_name') }}">
                @error('father_name')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="mother_name" class="required">Mother's Name:</label>
                <input type="text" id="mother_name" name="mother_name" placeholder="Name, Surname"
                    value="{{ old('mother_name') }}">
                @error('mother_name')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="parent_address" class="required">Parent's Address:</label>
                <textarea id="parent_address" name="parent_address"
                    placeholder="Address">{{ old('parent_address') }}</textarea>
                @error('parent_address')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="age" class="required">Age:</label>
                <input type="number" id="age" name="age" min="1" placeholder="Age" value="{{ old('age') }}">
                @error('age')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="passport_number" class="required">Passport Number:</label>
                <input type="text" id="passport_number" name="passport_number" placeholder="Passport Number (e.g: 12345678N)"
                    value="{{ old('passport_number') }}">
                @error('passport_number')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>

            <h4 style="color:red;">Passport Issuing Details:</h4>
            <div>
                <label for="issuing_country" class="required">Country:</label>
                <select id="issuing_country" name="issuing_country">
                    <option value="">Select a country</option>
                    @foreach ($countries as $issuing_country)
                        <option value="{{ $issuing_country }}">{{ $issuing_country }}</option>
                    @endforeach
                </select>
                @error('issuing_country')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="issuing_office" class="required">Name of the Issuing Office:</label>
                <input type="text" id="issuing_office" name="issuing_office" placeholder="Issuing Office"
                    value="{{ old('issuing_office') }}">
                @error('issuing_office')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="issuing_place" class="required">Place:</label>
                <input type="text" id="issuing_place" name="issuing_place" placeholder="Issuing Place"
                    value="{{ old('issuing_place') }}">
                @error('issuing_place')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="passport_issue_date" class="required">Date of Issue:</label>
                <input type="date" id="passport_issue_date" name="passport_issue_date" placeholder="Issue Date"
                    value="{{ old('passport_issue_date') }}">
                @error('passport_issue_date')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="valid_period" class="required">Valid period for the Passport:</label>
                <input type="date" id="valid_period" name="valid_period" placeholder="Valid Period"
                    value="{{ old('valid_period') }}">
                @error('valid_period')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>

            <h4 style="color:red;"> Renounced Citizenship (Optional)</h4>
            <div>
                <label for="renounced_citizenship_number">Renounced Citizenship Number:</label>
                <input type="text" id="renounced_citizenship_number" name="renounced_citizenship_number" placeholder="Citizenship Number (e.g: 1234567890)" value="{{ old('renounced_citizenship_number') }}">
                @error('renounced_citizenship_number')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="renounced_citizenship_district">Renounced Citizenship Issuing District:</label>
                <input type="text" id="renounced_citizenship_district" name="renounced_citizenship_district" placeholder="Issuing District" value="{{ old('renounced_citizenship_district') }}">
                
            </div>

            <div>
                <label for="renounced_date">Date of Renunciation:</label>
                <input type="date" id="renounced_date" name="renounced_date" placeholder="Date" value="{{ old('renounced_date') }}">
            </div>

            <h4 style="color:red;">If Close Relatives in Nepal (Optional)</h4>
            <div>
                <label for="relative_name">Name:</label>
                <input type="text" id="relative_name" name="relative_name" placeholder="Name, Surname" value="{{ old('relative_name') }}">
            </div>
            <div>
                <label for="relative_address">Address:</label>
                <textarea id="relative_address" name="relative_address" placeholder="Address">{{ old('relative_address') }}</textarea>
            </div>
            <div>
                <label for="relationship">Relationship:</label>
                <input type="text" id="relationship" name="relationship" placeholder="Relationship" value="{{ old('relationship') }}">
            </div>

            <h4 style="color:red;">If Father, Mother or Grandparents are Nepali Citizenship (Optional)</h4>
            <div>
                <label for="nepali_citizen_name">Name:</label>
                <input type="text" id="nepali_citizen_name" name="nepali_citizen_name" placeholder="Name" value="{{ old('nepali_citizen_name') }}">
            </div>
            <div>
                <label for="nepali_citizen_address">Address:</label>
                <textarea id="nepali_citizen_address" name="nepali_citizen_address" placeholder="Address">{{ old('nepali_citizen_address') }}</textarea>
            </div>
            <div>
                <label for="nepali_citizen_number">Citizenship Number:</label>
                <input type="text" id="nepali_citizen_number" name="nepali_citizen_number" placeholder="Citizenship Number (e.g: 1234567890)" value="{{ old('nepali_citizen_number') }}">
                @error('nepali_citizen_number')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>

            <h3 style="color:red;">2. Residing Countries (Optional)</h3>
            <div>
                <label for="residing_country_name">Name and Address:</label>
                <textarea id="residing_country_name" name="residing_country_name" placeholder="Name and Address">{{ old('residing_country_name') }}</textarea>
            </div>
            <div>
                <label for="residing_start_date">Starting date to reside in that country:</label>
                <input type="date" id="residing_start_date" name="residing_start_date" placeholder="Date" value="{{ old('residing_start_date') }}">
            </div>

            <h3 style="color:red;">3. Occupation/Engagement Details (Optional)</h3>
            <div>
                <label for="occupation_details">Details of occupation, business, or employment:</label>
                <textarea id="occupation_details" name="occupation_details" placeholder="Occupation">{{ old('occupation_details') }}</textarea>
            </div>
            <div>
                <label for="existing_occupation">Country and place of existing occupation, business, or employment:</label>
                <input type="text" id="existing_occupation" name="existing_occupation" placeholder="Existing Occupation" value="{{ old('existing_occupation') }}">
            </div>
            <div>
                <label for="annual_income">Average Annual transaction or income (in US $):</label>
                <input type="number" id="annual_income" name="annual_income" min="0" placeholder="Income" value="{{ old('annual_income') }}">
            </div>


            <h3 style="color:red;">4. Acquired Knowledge, Experience or Skill (Optional)</h3>
            <div>
                <label for="acquired_knowledge">Acquired Knowledge, Experience or Skill:</label>
                <textarea id="acquired_knowledge" name="acquired_knowledge" placeholder="Acquired Knowledge, Experience or Skills">{{ old('acquired_knowledge') }}</textarea>
            </div>


            <h3 style="color:red;">5. Investment Details (Optional)</h3>
            <div>
                <label for="investment_sector">Intended Sector for investment in Nepal:</label>
                <input type="text" id="investment_sector" name="investment_sector" placeholder="Investment Sector" value="{{ old('investment_sector') }}">
            </div>
            <div>
                <label for="investment_value">Estimated Value of Investment:</label>
                <input type="number" id="investment_value" name="investment_value" min="0" placeholder="Estimated Value" value="{{ old('investment_value') }}">
            </div>

            <div>
                <label for="attached_file" class="required">Attach Files:</label>
                <input type="file" id="attached_file" name="attached_file[]" multiple>
                @error('attached_file')
                    <div class="text-danger" style="color:red;">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>