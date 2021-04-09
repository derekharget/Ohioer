<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;



class CitizenInfoModel extends Model
{
    use HasFactory;

    // Database Table
    protected $table = 'ohio_citizen_data';

    //Do not enable, this is timestamps (Created and Updated at)
    public $timestamps = false;

    //Define date/time
    protected $dateFormat = 'Y/m/d';

    //Calculate age based on birthday
    /**
     * @var mixed
     */

    public function getAge(): int
    {
        return Carbon::parse($this->attributes['date_of_birth'])->age;
    }

    //Lower Cases and then capitalizes the first letter for First Names

    public function properFirstName(): string
    {
        return Str::ucfirst(Str::lower($this->attributes['first_name']));
    }

    //Lower Cases and then capitalizes the first letter for Middle Names

    public function properMiddleName(): string
    {
        return Str::ucfirst(Str::lower($this->attributes['middle_name']));
    }

    //Lower Cases and then capitalizes the first letter for Last Names

    public function properLastName(): string
    {
        return Str::ucfirst(Str::lower($this->attributes['last_name']));
    }

    // Sets up a full name to display on profile

    public function getFullName(): string
    {
        return $this->properFirstName() .' '.$this->properMiddleName() .' '.$this->properLastName();
    }

    // Format a address properly

    public function AddressFormat(): string
    {
        return Str::title(Str::lower($this->attributes['residential_address']));
    }

    //Capitalize the city name

    public function CityFormat(): string
    {
        return Str::ucfirst(Str::lower($this->attributes['residential_city']));
    }

    public function StateFormat(): string
    {
        if(Str::lower($this->attributes['residential_state']) === 'oh') {
            return 'Ohio';
        }
    }


    public function RegCityFormat(): string
    {
        return Str::title(Str::lower($this->attributes['registered_city']));
    }

    public function RegTownshipFormat(): string
    {
        return Str::title(Str::lower($this->attributes['township']));
    }

    public function RegVillageFormat(): string
    {
        return Str::title(Str::lower($this->attributes['village']));
    }

    public function PolicalPartyAffilation(): string
    {
        switch (Str::lower($this->attributes['party_affiliation'])) {

            case 'c':
                $party = 'Constitution';
                break;
            case 'd':
                $party = 'Democrat';
                break;
            case 'e':
                $party = 'Reform';
                break;
            case 'g':
                $party = 'Green';
                break;
            case 'l':
                $party = 'Libertarian';
                break;
            case 'n':
                $party = 'Natural Law';
                break;
            case 'r':
                $party = 'Republican';
                break;
            case 's':
                $party = 'Socialist';
                break;
            case 'x':
                $party = 'No';
                break;
            default:
                $party = 'No';
        }

        return $party . ' Party';
    }

    public function generateFullGoogleMapAddress(): string
    {

        $address = $this->attributes['residential_address'].' , '.$this->attributes['registered_city'].', ohio, '.$this->attributes['residential_zip'];

        $address = Str::lower($address);

        $address = urlencode($address);

        $addressWithMap = 'https://www.google.com/maps/search/?api=1&query='.$address;

        return $addressWithMap;
      //  https://www.google.com/maps/search/?api=1&query=centurylink+field
    }

    public function getUserCountyName(): string
    {
        $ohio_county_list = [
            1 => "Adams",
            "Allen",
            "Ashland",
            "Ashtabula",
            "Athens",
            "Auglaize",
            "Belmont",
            "Brown",
            "Butler",
            "Carroll",
            "Champaign",
            "Clark",
            "Clermont",
            "Clinton",
            "Columbiana",
            "Coshocton",
            "Crawford",
            "Cuyahoga",
            "Darke",
            "Defiance",
            "Delaware",
            "Erie",
            "Fairfield",
            "Fayette",
            "Franklin",
            "Fulton",
            "Gallia",
            "Geauga",
            "Greene",
            "Guernsey",
            "Hamilton",
            "Hancock",
            "Hardin",
            "Harrison",
            "Henry",
            "Highland",
            "Hocking",
            "Holmes",
            "Huron",
            "Jackson",
            "Jefferson",
            "Knox",
            "Lake",
            "Lawrence",
            "Licking",
            "Logan",
            "Lorain",
            "Lucas",
            "Madison",
            "Mahoning",
            "Marion",
            "Medina",
            "Meigs",
            "Mercer",
            "Miami",
            "Monroe",
            "Montgomery",
            "Morgan",
            "Morrow",
            "Muskingum",
            "Noble",
            "Ottawa",
            "Paulding",
            "Perry",
            "Pickaway",
            "Pike",
            "Portage",
            "Preble",
            "Putnam",
            "Richland",
            "Ross",
            "Sandusky",
            "Scioto",
            "Seneca",
            "Shelby",
            "Stark",
            "Summit",
            "Trumbull",
            "Tuscarawas",
            "Union",
            "Van Wert",
            "Vinton",
            "Warren",
            "Washington",
            "Wayne",
            "Williams",
            "Wood",
            "Wyandot"
        ];

        return $ohio_county_list[$this->attributes['county_number']];
    }




}
