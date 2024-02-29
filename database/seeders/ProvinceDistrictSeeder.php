<?php

namespace Database\Seeders;

use App\Models\Cell;
use App\Models\District;
use App\Models\Province;
use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   // Modified Seeder
public function run()
{
    // Eastern Province data
    $province = Province::create([
        'name' => 'Eastern Province'
    ]);

    $districts = [
        [
            'name' => 'Bugesera',
            'sectors' => [
                [
                    'name'=>'Nyamata',
                    'cells'=>['kanazi','kayumba','Maranyundo','Murama',"Nyamata y'umugi",""]
                ], 
                [
                    'name'=>'Juru',
                    'cells'=>['juru','kabukuba','Mugorore','Musovu','Rwinume']
                ], 
                [
                   'name'=>'Gashora',
                   'cells'=>['Biryogo','Kabuye','Kagomasi','Mwendo','Ramiro']
                ],
                 [
                  'name' =>'Kamabuye',
                  'cells'=>['Biharagu','Burenge','kampeka','Nyakayaga','Tunda',],
                ], 
                 [
                    'name'=>'Mareba',
                    'cells'=>['Bushenyi','Gakomeye','Nyamigina','Rango','Rugarama',]
                ], 
                 [
                   'name'=> 'Mayange',
                   'cells'=>['Gakamba','Kagenge','Kibenga','kibirizi','Mbyo','']
                ],
                  [
                   'name'=> 'Musenyi',
                   'cells'=>['Gicaca','Musenyi','Nyagihunika','Rulindo']
                ], 
                  [
                    'name'=>'Mwogo',
                    'cells'=>['Bitaba','Kagasa','Rugunga','Rugenge']
                ], 
                  [
                   'name'=> 'Ngeruka',
                   'cells'=>['Gihembe','Murama','Ngeruka','Nyakayenzi','Rutonde','']
                ], 
                [
                  'name'=>'Ntarama',
                  'cells'=>['Cyugaro','Kanzenze','Kibungo',]
                ], [
                   'name' => 'Nyarugenge',
                   'cells'=>['Gihinga','Kabuye','Murambi','Ngenda','Rugando']
                ],
                 [
                   'name'=> 'Rilima',
                   'cells'=>['Kabeza','karera','kimaranzara','ntarama','Nyabagendwa']
                ], 
                [
                    'name'=>'Ruhuha',
                    'cells'=>['Buhari','Gatanga','Gikundamvura','kindama','Ruhuha','']
                ], [
                   'name'=>'Rweru',
                   'cells'=>['Batima','Kintambwe','Mazane','Nemba','Nkanga','Sharita']
                ],
                [
                   'name'=>'Shyara',
                   'cells'=>['Kabugugu','Kamabuye','Nziranziza','Rebero','Rutare']
                    ]
                    ]
        ],
        [
            'name' => 'Kayonza',
            'sectors' => [
                [
                  'name'=>'Gahini',
                  'cells'=>['juru','kahi','Kiyenzi','Urugarama','']
                ], 
                [
                   'name'=>'Kabare',
                'cells'=>['Cyarubare','Gitara','Kirehe','Rubimba','Rubumba']
                ], 
                [
                  'name' => 'Kabarondo',
                  'cells'=>['Cyabajwa','Cyinzovu','Kabura','Rusera','']
                ], 
                [
                   'name'=> 'Mukarange',
                   'cells'=>['Bwiza','Kayonza','Mburabuturo','Nyagatovu','Rugendabari']
                ], 
                [
                  'name' =>'Murama',
                  'cells'=>['Bunyentongo','Muko','Murama','Nyakanazi','Rusave']
                ], 
                [
                   'name'=>'Murundi',
                   'cells'=>['Buhabwa','Karambi','Murundi','Rwamanyoni','']
                ],
                [ 
                    'name'=>'Mwiri',
                'cells'=>['kageyo','Migera','Nyamugari','Nyawera',]
                ],
                 [
                   'name'=>'Ndego',
                'cells'=>['Byimana','Isanga','karambi','kiyovu','']
                ],
                  [
                    'name'=>'Nyamirama',
                    'cells'=>['Gikaya','Musumba','Rurambi','Shyogo','']
                    ] ,[
                       'name'=>'Rukara',
                       'cells'=>['kawangire','Rukara','Rwiminshinya',]
                       ] ,
                       [
                       'name'=>'Ruramira',
                    'cells'=>['Bugambira','Nkamba','Ruyonza','Umubuga']
                    ], [
                        'name'=>'Rwinkwavu',
                        'cells'=>['Gihinga','Mbarara','Mukoyoyo','Nkondo']
                        ] ]
        ],
        // Add more districts as needed
        [
            'name'=>'kirehe',
            'sectors'=>[

                [
                 'name'=>'Gahara',
                 'cells'=>['Butezi','Muhamba','Murehe','Nyagasenyi','Nyakagezi','Rubimba']
                ],
                
                [
                  'name' =>'Gatore',
                  'cells'=>['Curazo','Cyunuzi','Muganza','Nyamiryango','Rwabutazi','Rwantonde',]
                ],
                [
                   'name'=>'kigarama',
                'cells'=>['Cyanya','kigarama','kiremera','Nyakerera','Nyakurazo',]
                ],
                [
                    'name' =>'kigina',
                'cells'=>['Gatarama','Rugarama','Ruhanga','Rwanteru',]
                ],
                [
                    'name' =>'kirehe',
                'cells'=>['Gahama','kirehe','Nyabigega','Nyabikokora','Rwesero']
                ],
                [
                    'name' => 'mahama',
                'cells'=>['kamombo','Munini','Mwoga','saruhembe','Umunini']
                ],
                [
                    'name' => 'Mpanga',
                    'cells'=>['Bwiyorere','kankobwa','Mpanga','Mushongi','Nasho','Nyakabungo','Rubaya']   
                ],[
                    'name' => 'musaza',
                   'cells'=>['Gasarabwayi','Kabuga','Mubuga','Musaza','Nganda','']
             ],
             [
                'name' => 'Mushikiri',
                'cells'=>['Bisagara','cyamigurwa','Rugarama','Rwanyamuhanga','Rwayikona']
            ],
            [
                'name' => 'Nasho',
                'cells'=>['Cyambwe','kagese','Ntaruka','Rubirizi','Rugoma']
            ],
            [
                'name' => 'Nyamugari',
                'cells'=>['Bukora','kagasa','kazizi','kiyanzi','Nyamugari',]
            ],[
                'name' => 'Nyarubuye',
            'cells'=>['Mareba','Nyabitare','Nyarutunga']
            ],
                ]
        ],
        [
            'name'=>'Gatsibo',
            'sectors'=>[
                ['Gasange'],['Gatsibo'],['Gitoki'],['Kabarore'],['Kageyo'],['Kiramuruzi'],['Kiziguro'],['Murambi'],['Ngarama'],['Nyagihanga'],['Remera'],['Rugarama'],['Rwimbogo']
                ]
        ],
        [
            'name'=>'Ngoma',
            'sectors'=>[
                ['Gashanda'],['Jarama'],['Karembo'],['kazo'],['Kibugo'],['Mugesera'],['Murama'],['Mutenderi'],['Remera'],['Rukira'],['Rukumberi'],['Rurenge'],['Sake',]['Zaza']
              ]
        ],
        [
            'name'=>'Nyagatare',
            'sectors'=>
            [
                ['Gatunda'],['Karama'],['Karangazi'],['Katabagemu'],['Kiyombe'],['Matimba'],['Mimuri'],['Mukama'],['Musheri'],['Nyagatare'],['Rukomo'],['Rwempasha'],['Rwimiyaga'],['Tabagwe']
                ]
        ] ,
        [
            'name'=>'Rwamagana',
            'sectors'=>[
                ['Fumbwe'],['Gahengeri'],['Gishali'],['Karenge'],['Kigabiro'],['Muhazi'],['Munyaga'],['Munyiginya'],['Musha'],['Muyumbu'],['Mwulire'],['Nyakariro'],['Nzige'],['Rubona']
                ]
        ]
    ];

    foreach ($districts as $districtData) {
        $district = District::create([
            'name' => $districtData['name'],
            'province_id' => $province->id
        ]);

        foreach ($districtData['sectors'] as $sectorData) {
           $sector= Sector::create([
                'district_id' => $district->id,
                'name' => $sectorData['name']
            ]);

            foreach($sectorData['cells'] as $cellName){
                Cell::create([
                    'sector_id'=>$sector->id,
                    'name'=>$cellName
                ]);
            }
        }
    }

    // Western Province data
    $province = Province::create([
        'name' => 'Western Province'
    ]);

    $district = District::create([
        'province_id' => $province->id,
        'name' => 'Rutsiro'
    ]);

    Sector::create([
        'district_id' => $district->id,
        'name' => 'Mamba'
    ]);
}

}
