<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class IndustryController extends Controller
{
public function index()
{
    $qualifications = json_decode(
        File::get(resource_path('data/qualifications.json')),
        true
    ) ?? [];

    $qualificationLevels = collect($qualifications)
        ->pluck('level')
        ->filter()
        ->unique()
        ->sort()
        ->values();

    return view('frontend.pages.industry.qualifications', [
        'industry' => null,
        'qualifications' => $qualifications,
        'qualificationLevels' => $qualificationLevels,
    ]);
}

public function industryQualification(string $slug)
{
    // Load industries
    $industries = json_decode(
        File::get(resource_path('data/industries.json')),
        true
    ) ?? [];

    // Load qualifications
    $allQualifications = json_decode(
        File::get(resource_path('data/qualifications.json')),
        true
    ) ?? [];

    // Find selected industry
    $industry = collect($industries)->firstWhere('slug', $slug);

    abort_if(!$industry, 404);

    // Get only selected industry's qualifications
    $qualifications = collect($allQualifications)
        ->where('industry_slug', $slug)
        ->values();

    // Get unique qualification levels
    $qualificationLevels = $qualifications
        ->pluck('level')
        ->filter()
        ->unique()
        ->sort()
        ->values();

    return view('frontend.pages.industry.qualifications', [
        'industry' => $industry,
        'qualifications' => $qualifications,
        'qualificationLevels' => $qualificationLevels,
    ]);
}

public function show(string $qualificationslug)
{
   
    $qualifications = json_decode(
        File::get(resource_path('data/qualifications.json')),
        true
    );

    $qualification = collect($qualifications)->firstWhere('slug', $qualificationslug);

    abort_if(!$qualification, 404);
        // return $qualification;

    return view('frontend.pages.industry.show', compact('qualification'));
}

    public function industryEnrollment()
    {
        return view('frontend.pages.industry.enrollment');
    }

    public function courseEnrollment()
    {
        return view('frontend.pages.industry.enrollment');
    }
}
