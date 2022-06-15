<?php

namespace App\Models;

use App\Models\DistributionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Release extends Model
{
    use HasFactory;

    public function available_distributions(Release $release){
        $distribution_type_ids = explode('|', $release->distribution_types);

        $distribution_types = [];
        foreach($distribution_type_ids as $distribution_type_id){
            $distribution_types[] = DistributionType::find($distribution_type_id);
        }

        return $distribution_types;
    }

    public function valid_partners(Release $release){
        $distribution_type_ids = explode('|', $release->distribution_types);

        $partners = Partner::get();

        $valid_partners = [];
        
        foreach($partners as $partner){
            $partner_distribution_ids = explode('|', $partner->distribution_types);
            
            foreach($partner_distribution_ids as $partner_distribution_id){
                if(in_array($partner_distribution_id, $distribution_type_ids)){
                    $valid_partners[] = $partner;
                }
            }
        }

        $valid_partners = array_unique($valid_partners);

        return $valid_partners;
    }


    public function song(){
        return $this->belongsTo(Song::class, 'song_id');
    }

    public function artist(){
        return $this->belongsTo(Artist::class, 'artist_id');
    }
    
}
