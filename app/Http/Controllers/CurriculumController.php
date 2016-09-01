<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Country;
use App\Personal_data;
use App\Formation;
use App\Experience;
use App\Sector;
use App\Language;
use App\Language_skill;
use App\Knowledge;
use App\Preference;
use App\Profile;
use App\Http\Requests;

class CurriculumController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showFormPersonalDate(){
      $countries = Country::all()->lists('name','id');
      return view('curriculum.personal_date')->with('countries',$countries);
    }

    public function savePersonalDate(Request $request){
      $this->validate($request, [
        'birth_date' => 'required',
        'type_dni' => 'required|not_in:0',
        'num_dni' => 'required',
        'phone' => 'required',
        'marital_status' => 'required|not_in:0',
        'country' => 'required',
        'driver_license' => 'required',
        'vehicle' => 'required',
      ]);

      $personal_data = new Personal_data;
      $personal_data->birth_date = $request->birth_date;
      $personal_data->type_dni = $request->type_dni;
      $personal_data->num_dni= $request->num_dni;
      $personal_data->phone = $request->phone;
      $personal_data->marital_status = $request->marital_status;
      $personal_data->country_id = $request->country;
      $personal_data->driver_license = implode(",", $request->driver_license);
      $personal_data->vehicle = $request->vehicle;
      $personal_data->user_id = Auth::user()->id;
      $personal_data->save();

      return redirect()->route('curriculum_formation_show');
    }

    public function showFormFormation(){
      $formations = Formation::where('user_id', Auth::user()->id);
      return view('curriculum.formation')->with('formations',$formations->get());
    }

    public function saveFormation(Request $request){
      $this->validate($request, [
        'educational_establishment' => 'required',
        'level_study' => 'required|not_in:0',
        'state' => 'required',
        'period_study_init' => 'required',
        'period_study_end' => 'required'
      ]);
      $area = (empty($request->area_study) ? 'sn' : $request->area_study);

      $formation = new Formation;
      $formation->educational_establishment = $request->educational_establishment;
      $formation->level_study = $request->level_study;
      $formation->state= $request->state;
      $formation->area_study = $area;
      $formation->period_study_init = $request->period_study_init;
      $formation->period_study_end = $request->period_study_end;
      $formation->user_id = Auth::user()->id;
      $formation->save();

      return redirect()->route('curriculum_formation_show');
    }

    public function showFormExperience(){
        $countries = Country::all()->lists('name','id');
        $sectors = Sector::all()->lists('name','id');
        $experiences = Experience::where('user_id', Auth::user()->id);
        return view('curriculum.experience')
            ->with('experiences',$experiences->get())
            ->with('countries',$countries)
            ->with('sectors',$sectors);
    }

    public function saveExperience(Request $request){
        $this->validate($request, [
            'company' => 'required',
            'country' => 'required|not_in:0',
            'city' => 'required',
            'sector' => 'required|not_in:0',
            'position' => 'required',
            'area' => 'required',
            'period_work_init' => 'required',
            'period_work_end' => 'required',
            'detail' => 'required'
        ]);

        $experience = new Experience;
        $experience->company = $request->company;
        $experience->country_id = $request->country;
        $experience->city= $request->city;
        $experience->sector_id = $request->sector;
        $experience->position = $request->position;
        $experience->area = $request->area;
        $experience->period_work_init = $request->period_work_init;
        $experience->period_work_end = $request->period_work_end;
        $experience->detail = $request->detail;
        $experience->user_id = Auth::user()->id;
        $experience->save();

        return redirect()->route('curriculum_experience_show');
    }

    public function showFormLanguage(){
        $languages = Language::all()->lists('name','id');
        $language_skills = Language_skill::where('user_id', Auth::user()->id);
        return view('curriculum.language')
            ->with('language_skills',$language_skills->get())
            ->with('language',$languages);
    }

    public function saveLanguage(Request $request){
        $this->validate($request, [
            'language' => 'required|not_in:0',
            'level' => 'required|not_in:0'
        ]);

        $language_skill = new Language_skill();
        $language_skill->language_id = $request->language;
        $language_skill->level = $request->level;
        $language_skill->user_id = Auth::user()->id;
        $language_skill->save();

        return redirect()->route('curriculum_language_show');
    }

    public function showFormKnowledge(){
        $knowledge = Knowledge::where('user_id', Auth::user()->id);
        return view('curriculum.knowledge')
            ->with('knowledges',$knowledge->get());
    }

    public function saveKnowledge(Request $request){
        $this->validate($request, [
            'description' => 'required',
            'level' => 'required|not_in:0'
        ]);

        $knowledge = new Knowledge();
        $knowledge->description = $request->description;
        $knowledge->level = $request->level;
        $knowledge->user_id = Auth::user()->id;
        $knowledge->save();

        return redirect()->route('curriculum_knowledge_show');
    }

    public function showFormPreference(){
        return view('curriculum.preference');
    }

    public function savePreference(Request $request){
        $this->validate($request, [
            'current_situation' => 'required',
            'work_place' => 'required',
            'minimum_wage' => 'required',
            'state' => 'required',
            'travel' => 'required',
            'move' => 'required'
        ]);

        $preference = new Preference();
        $preference->current_situation = $request->current_situation;
        $preference->work_place = $request->work_place;
        $preference->minimum_wage= $request->minimum_wage;
        $preference->state = $request->state;
        $preference->travel = $request->travel;
        $preference->move = $request->move;
        $preference->user_id = Auth::user()->id;
        $preference->save();

        return redirect()->route('curriculum_preference_show');
    }

    public function showFormProfile(){
        return view('curriculum.profile');
    }

    public function saveProfile(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required | mimes:jpeg,jpg,png'
        ]);

        $id = Auth::user()->id;
        $file = $request->file('picture');
        $tmpFilePath = '/upload/';
        $tmpFileName = time() . '-'.$id. '-' . $file->getClientOriginalName();
        $file->move(public_path() . $tmpFilePath, $tmpFileName);
        $path = $tmpFilePath . $tmpFileName;

        $profile = new Profile();
        $profile->title = $request->title;
        $profile->description = $request->description;
        $profile->picture= $path;
        $profile->user_id = Auth::user()->id;
        $profile->save();

        return redirect()->route('home');
    }
}
