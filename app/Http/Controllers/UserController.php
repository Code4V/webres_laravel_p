<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

    $information = [  
                "skills" => [                    
                    "front_end" => 
                        [
                            ["skillName"=>"html","skillPercent"=>85, "skillIcon"=>"fa-html5"],
                            ["skillName"=>"css","skillPercent"=>90, "skillIcon"=>"fa-css3-alt"],
                            ["skillName"=>"javascript","skillPercent"=>65, "skillIcon"=>"fa-square-js"],
                            ["skillName"=>"wordpress","skillPercent"=>80, "skillIcon"=>"fa-wordpress"],
                        ],
                    "back_end" => 
                        [
                            ["skillName"=>"php","skillPercent"=>85, "skillIcon"=>"fa-php"],
                            ["skillName"=>"node","skillPercent"=>50, "skillIcon"=>"fa-node-js"],
                            ["skillName"=>"python","skillPercent"=>50, "skillIcon"=>"fa-python"]
                        ],
                    "dev_ops" =>
                        [
                            ["skillName"=>"slack","skillPercent"=>100, "skillIcon"=>"fa-slack"],
                            ["skillName"=>"discord","skillPercent"=>100, "skillIcon"=>"fa-discord"],                     
                            ["skillName"=>"git","skillPercent"=>80, "skillIcon"=>"fa-git-alt"],
                        ],
                    "learning" =>
                        [
                            ["skillName"=>"react","skillPercent"=>30, "skillIcon"=>"fa-react"],
                            ["skillName"=>"laravel","skillPercent"=>35, "skillIcon"=>"fa-laravel"],
                            ["skillName"=>"mongodb","skillPercent"=>40, "skillIcon"=>"fa-envira"],
                            ["skillName"=>"docker","skillPercent"=>25, "skillIcon"=>"fa-docker"],
                        ]
                ],
                
                "works" => 
                [
                    [   
                    "workTitle" => "Lakbay sa Bayan", 
                    "workDescription" => "A website for Travel Agencies to post their package with instead of solely relying on Facebook to share their packages",
                    "workImage" => [
                        "large_screen" => "Lakbay_Logo.webp",
                                    "small_screen" => "Lakbay.webp"
                                ],
                                "workLink" => "https://www.lakbaysabayan.com",
                    "workCategory" => ["PHP", "JS"]

                    ], 
                    [
                    "workTitle" => "Eira University", 
                    "workDescription" => "A certification website to test your knowledge on robotic topics",
                    "workImage" => [
                                    "large_screen" => "Eira_Logo.webp",
                                    "small_screen" => "Eira.webp"
                                ],
                    "workLink" => "https://eira.erovoutika.ph",
                    "workCategory" => ["PHP", "RUBY"]
                    ],
                ],
 
                "experiences" =>
                [
                    [
                        "workCompany" => "Remotasks",
                        "workDescription" => "A project-based freelancing platform",
                        "workPosition" => ["3D Lidar Annotator", "3D Lidar Reviewer"],
                        "workYear" => [2020, 2022] 
                    ],
                    [
                        "workCompany" => "Erovoutika",
                        "workDescription" => "A company specialized in Robotics and Certifications",
                        "workPosition" => ["Full-Stack Developer", "Project Manager"],
                        "workYear" => [2023]
                    ]
                ]
             ];
        // dd($front_end);
        return view("index", $information);
    }

    public function contact(){
        return view("contact");
    }
}
