<?php

namespace MtgSlo;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model{

    protected $table = 'tournaments';

    protected $fillable = ['id_place','date','registration','start','id_judge','name','id_league','id_format','prizes','price','rel','pwp','picture','forum_link','text','id_type',];

    public function __toString(){
        return $this->name;
    }

    public function link(){
        return convertToLink($this->name)."/".$this->id;
    }

    public function league(){
        return $this->belongsTo("\MtgSlo\League","id_league");
    }

    public function judge(){
        return $this->belongsTo("\MtgSlo\Judge","id_judge");
    }

    public function location(){
        return $this->belongsTo("\MtgSlo\Location","id_location");
    }

    public function format(){
        return $this->belongsTo("\MtgSlo\Format","id_format");
    }

    public function rankings(){
        return $this->hasMany("\MtgSlo\Ranking","id_tournament")->orderBy("place","ASC");
    }

    public function hasDecklists(){
        return $this->rankings()->where("decklist","<>","")->count()>0;
    }

    public function processResults(){
        if(\Input::file("file")) {
            if (!\Input::file("file")->isValid()){
                return "You have uploaded invalid file.";
            }
            else{
                if(\Input::file("file")->getClientOriginalExtension()=="wer" && (\Input::file("file")->getClientMimeType()=="application/octet-stream")){
                    $this->rankings()->delete();
                    $xml = simplexml_load_file(\Input::file("file"));
                    foreach($xml->participation->team as $team)
                    {
                        $players[(string) $team->member['person']]['name']=(string)$team['name'];
                    }
                    foreach($xml->matches->round as $round){
                        foreach($round->match as $match){
                            switch((string) $match['outcome']){
                                case '1':
                                    if(!isset($players[(string)$match['person']]['mp'])){
                                        $players[(string)$match['person']]['mp']=3;
                                    }
                                    else{
                                        $players[(string)$match['person']]['mp']+= 3;
                                    }
                                    break;
                                case '2':
                                    if(!isset($players[(string)$match['person']]['mp'])){
                                        $players[(string)$match['person']]['mp']=1;
                                    }
                                    else{
                                        $players[(string)$match['person']]['mp']+= 1;
                                    }
                                    break;
                                case '3':
                                    if(!isset($players[(string)$match['person']]['mp'])){
                                        $players[(string)$match['person']]['mp']=3;
                                    }
                                    else{
                                        $players[(string)$match['person']]['mp']+= 3;
                                    }
                                break;
                            }
                        }
                    }

                    foreach($players as $dci=>&$player){
                        $dc=(string)$dci;
                        $full=explode(", ",$player['name']);
                        $ime=$full[1]." ".$full[0];
                        $mp=$player['mp'];
                        foreach($xml->participation->role->ref as $role){
                            if($role['person']==$dci){
                                $place=$role['seq'];
                            }
                        }
                        \MtgSlo\Ranking::create(array("id_tournament"=>$this->id,"dci"=>$dc,"place"=>$place,"points"=>$mp,"leaguepoints"=>$mp,"full_name"=>$ime));
                    }
                    return "Results are successfully uploaded.";

                }
                else{
                    return "You have uploaded invalid file.";
                }
            }
        }
        else{
            return "You have uploaded invalid file.";
        }


    }



}
