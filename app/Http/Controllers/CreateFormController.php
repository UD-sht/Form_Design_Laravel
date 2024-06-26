<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFormRequest;
use App\Models\CreateFormModel;
use Illuminate\Support\Facades\Storage;


class CreateFormController extends Controller
{
    public function index()
    {
        $countries = [
            'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua and Barbuda',
            'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain',
            'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia',
            'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso',
            'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada', 'Central African Republic',
            'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo', 'Costa Rica', 'Croatia',
            'Cuba', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
            'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Eswatini',
            'Ethiopia', 'Fiji', 'Finland', 'France', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana',
            'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras',
            'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy',
            'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kosovo', 'Kuwait',
            'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein',
            'Lithuania', 'Luxembourg', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta',
            'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco',
            'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal',
            'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'North Korea', 'North Macedonia',
            'Norway', 'Oman', 'Pakistan', 'Palau', 'Palestine', 'Panama', 'Papua New Guinea', 'Paraguay',
            'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda',
            'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa',
            'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles',
            'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia',
            'South Africa', 'South Korea', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname',
            'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste',
            'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda',
            'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan',
            'Vanuatu', 'Vatican City', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
        ];
        return view('FormCreation',['countries' => $countries]);
    }
    public function store(CreateFormRequest $request)
    {       
        $f = new CreateFormModel;
        $f->name = $request['name'];
        $f->father_name = $request['father_name'];
        $f->mother_name = $request['mother_name'];
        $f->parent_address = $request['parent_address'];
        $f->age = $request['age'];
        $f->passport_number = $request['passport_number'];
        $f->issuing_country = $request['issuing_country'];
        $f->issuing_office = $request['issuing_office'];
        $f->issuing_place = $request['issuing_place'];
        $f->passport_issue_date = $request['passport_issue_date'];
        $f->valid_period = $request['valid_period'];

        $f->renounced_citizenship_number= $request['renounced_citizenship_number'];
        $f->renounced_citizenship_district = $request['renounced_citizenship_district'];
        $f->renounced_date = $request['renounced_date'];
        $f->relative_name = $request['relative_name'];
        $f->relative_address = $request['relative_address'];
        $f->relationship = $request['relationship'];
        $f->nepali_citizen_name = $request['nepali_citizen_name'];
        $f->nepali_citizen_address = $request['nepali_citizen_address'];
        $f->nepali_citizen_number = $request['nepali_citizen_number'];
        $f->residing_country_name = $request['residing_country_name'];
        $f->residing_start_date = $request['residing_start_date'];
        $f->occupation_details = $request['occupation_details'];
        $f->existing_occupation = $request['existing_occupation'];
        $f->annual_income = $request['annual_income'];
        $f->acquired_knowledge = $request['acquired_knowledge'];
        $f->investment_sector = $request['investment_sector'];
        $f->investment_value = $request['investment_value'];


        if ($request->hasFile('attached_file')) {
            $attachedFiles = [];
        
            foreach ($request->file('attached_file') as $file) {
                $path = $file->getClientOriginalName();
                $file->move(public_path().'/files/', $path);
                $attachedFiles[] = $path;
            }
        
            $f->attached_file = json_encode($attachedFiles); 
            $f->name = $request->input('name');        
        }
        $f->save();

        // dd($request->all());

        return back()->with('success', 'Form submitted successfully!');

        // session()->flash('success', 'Form submitted successfully!');
        // return back();        
        
    } 
}
