<?php
use App\User;
use App\Alerte;
use App\Patient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // $medecin=factory('App\User')->create();
    // $patients=App\Patient::all();
    // $medecin->patients()->attach($patients);
    // user=App\User::find(4);
    // foreach($user->patients as $patient){
    //     echo $patient->lname;
    // }
    
    // $medecin=new User();
    // $medecin->name="Hamza Filali";
    // $medecin->email="drfilali@gmail.com";
    // $medecin->password=bcrypt("123456789");
    // $medecin->save();
    //    $patients=Patient::all();
    //    $medecin=User::find(1);
    //    $medecin->patients()->attach($patients);

    // $alerte=Alerte::create([
    //     "id_patient"=>1,
    //     "id_medecin"=>1,
    //     "longitude"=>"35.768965",
    //     "latitude"=>"-5.889576",
    //     "date"=>date("2020-04-05"),
    //     "nbr_battement"=>70,
    //     "degre_douleur"=>3,
    //     "tension"=>"120/90",
    //     "temperature"=>37,
    //     "remarque"=>"",
    //     "file_ordonance"=>"",
    //     "date_traitement"=>date("2020-04-05"),
    //     "vu_medecin"=>0,
    //     "vu_patient"=>0
    // ]);


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
