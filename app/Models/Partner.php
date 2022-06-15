<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;

    public function available_distribution_types(Partner $partner){
        
        
        $available_distribution_types = [];

        $partner_distribution_types = explode('|', $partner->distribution_types);

        foreach($partner_distribution_types as $partner_distribution_type){
            $available_distribution_types[] = DistributionType::find($partner_distribution_type);
        }

        return $available_distribution_types;
    }

    public function get_distribution_type_names(Partner $partner){

        $distributions_names = [];

        $partner_distribution_types = explode('|', $partner->distribution_types);

        foreach($partner_distribution_types as $partner_distribution_type){
            $distribution_names[] = DistributionType::find($partner_distribution_type)->name;
        }

        $available_distribution_type_names = implode(' & ', $distribution_names);

        return $available_distribution_type_names;
    }

    public function count_distributions(Partner $partner){
    
        $releases = Release::get();
        $all_distributions = [];

        foreach($releases as $release){
            $release_distribution_types = explode('|', $release->distribution_types);
            foreach($release_distribution_types as $release_distribution_type){
                $all_distributions[] = $release_distribution_type;
            }
        }

        $total_partner_distributions = 0;
        $partner_distribution_types = explode('|', $partner->distribution_types);
        foreach($partner_distribution_types as $partner_distribution_type){
            $total_partner_distributions += count(array_keys($all_distributions, $partner_distribution_type));
        }
        
        $total_partner_distributions = ($total_partner_distributions < 10) ? '0'.$total_partner_distributions : $total_partner_distributions;

        return $total_partner_distributions;
    }
}
