<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributionType extends Model
{
    use HasFactory;

    public function available_partners(DistributionType $distribution_type){
        $partners = Partner::get();

        $available_partners = [];

        foreach($partners as $key => $partner){
            $partner_distribution_types = explode('|', $partner->distribution_types);

            if(in_array($distribution_type->id, $partner_distribution_types)){
                $available_partners[] = $partner;
            }
        }
        
        return $available_partners;
    }


    public function get_partners(DistributionType $distribution_type){
        $partners = self::available_partners($distribution_type);

        $list_partners = [];

        foreach($partners as $partner){
            $list_partners[] = $partner->name;
        }

        $partners = implode(', ', $list_partners);

        return $partners;
    }


    public function count_distributions(DistributionType $distribution_type){
    
        $releases = Release::get();
        $all_distributions = [];

        foreach($releases as $release){
            $release_distribution_types = explode('|', $release->distribution_types);
            foreach($release_distribution_types as $release_distribution_type){
                $all_distributions[] = $release_distribution_type;
            }
        }

        $total_distributions = 0;
        $total_distributions += count(array_keys($all_distributions, $distribution_type->id));
        
        $total_distributions = ($total_distributions < 10) ? '0'.$total_distributions : $total_distributions;

        return $total_distributions;
    }
}
