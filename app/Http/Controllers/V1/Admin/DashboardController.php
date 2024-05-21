<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\AvailableAsset;
use App\Models\V1\Admin\CreditRightsTitle;
use App\Models\User;
use App\Models\Lawyer;
use App\Models\V1\Admin\Organization;
use App\Models\V1\Admin\Payment;
//use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
       
        $totalUsersThisMonth = User::whereMonth('created_at', now()->month)->count();
        $totalUsersLastMonth = User::whereMonth('created_at', now()->subMonth()->month)->count();
       
         // Calcula a diferença entre o número de usuários do mês atual e do mês anterior
        $usersDifference = $totalUsersThisMonth - $totalUsersLastMonth;

        // Calcula o percentual de crescimento
        if($totalUsersLastMonth == 0){$totalUsersLastMonth = 1;}
        if ($usersDifference > 0 && $totalUsersLastMonth > 0) {
            $percentageGrowthUsers = ($usersDifference / $totalUsersLastMonth) * 100;
        } else {
            $percentageGrowthUsers = 0;
        }
        
        $totalLawyers = Lawyer::all()->count();

        $totalLawyersThisMonth = Lawyer::whereMonth('created_at', now()->month)->count();
        $totalLawyersLastMonth = Lawyer::whereMonth('created_at', now()->subMonth()->month)->count();
       
         // Calcula a diferença entre o número de advogados do mês atual e do mês anterior
        $lawyersDifference = $totalLawyersThisMonth - $totalLawyersLastMonth;

        if($totalLawyersLastMonth == 0){$totalLawyersLastMonth = 1;}
        // Calcula o percentual de crescimento
        if ($lawyersDifference > 0) {
            $percentageGrowthLawyers = ($lawyersDifference / $totalLawyersLastMonth) * 100;
        } else {
            $percentageGrowthLawyers = 0;
        }

        
        $totalCreditRightsTitles = CreditRightsTitle::all()->count() ;

        $totalCRTsThisMonth = CreditRightsTitle::whereMonth('created_at', now()->month)->count();
        $totalCRTsLastMonth = CreditRightsTitle::whereMonth('created_at', now()->subMonth()->month)->count();

         // Calcula a diferença entre o número de titulos de diretiro creditório do mês atual e do mês anterior
         $crtsDifference = $totalCRTsThisMonth - $totalCRTsLastMonth;

         if($totalCRTsLastMonth == 0){
            $totalCRTsLastMonth = 1;
        }
         // Calcula o percentual de crescimento
         if ($crtsDifference > 0) {
             $percentageGrowthCreditRightsTitles = ($crtsDifference / $totalCRTsLastMonth) * 100;
         } else {
             $percentageGrowthCreditRightsTitles = 0;
         }

         
         $totalOrganizationsThisMonth = Organization::whereMonth('created_at', now()->month)->count();
         $totalOrganizationsLastMonth = Organization::whereMonth('created_at', now()->subMonth()->month)->count();
         
         if($totalOrganizationsLastMonth == 0){
             $totalOrganizationsLastMonth = 1;
         }

         // Calcula a diferença entre o número de titulos de diretiro creditório do mês atual e do mês anterior
         $organizationsDifference = $totalOrganizationsThisMonth - $totalOrganizationsLastMonth;
        
         // Calcula o percentual de crescimento
         if ($organizationsDifference > 0) {
             $percentageGrowthOrganizations = ($organizationsDifference / $totalOrganizationsLastMonth )  * 100;
         } else {
             $percentageGrowthOrganizations = 0;
         }

         $totalRevenue = Payment::where('payment_status_id', '2')->sum('amount');

         $percentageGrowthRevenue = $totalRevenue - $totalRevenue;

         $statusIds = [1, 2];
         $totalNegotiatedValue = AvailableAsset::getTotalNegotiatedValue([1,2]);
         $availableAssets = AvailableAsset::whereIn('status_id', [1,2])->get();
        
        return view('pages.index', ['user'                                  =>      $user, 
                                    'totalUsers'                            =>      User::all()->count(), 
                                    'percentageGrowthUsers'                 =>      $percentageGrowthUsers,
                                    'totalLawyers'                          =>      $totalLawyers,
                                    'percentageGrowthLawyers'               =>      $percentageGrowthLawyers,
                                    'totalCreditRightsTitles'               =>      $totalCreditRightsTitles,
                                    'percentageGrowthCreditRightsTitles'    =>      $percentageGrowthCreditRightsTitles,
                                    'totalOrganizations'                    =>      Organization::all()->count(),
                                    'percentageGrowthOrganizations'         =>      $percentageGrowthOrganizations,
                                    'totalRevenue'                          =>      $totalRevenue,
                                    'percentageGrowthRevenue'               =>      $percentageGrowthRevenue,
                                    'totalNegotiatedValue'                       =>      $totalNegotiatedValue]);

    }

}
