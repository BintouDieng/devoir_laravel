<?php

use App\Models\Combat;
use App\Models\Lutteur;
use App\Models\ResultatCombat;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/add', 'pages/vitrine/combat/add');
Route::view('/edit', 'pages/vitrine/combat/edit');
Route::view('/list', 'pages/vitrine/combat/list');

Route::get('/', function () {


//   Inserer 7 Lutteurs avec  Fluent Query Builder
//    $ok= DB::table('lutteurs')->insert(
//         [
//             [
//                 'nom'=> 'Gaye',
//                 'prenom'=> 'Balla',
//                 'adress'=> 'Guediaway',
//                 'dateNaissance'=> '1989-10-5',
//                 'lieuNaissance'=> 'Saloum',
//                 'age'=> 34,
//                 'categorie'=> 'vip'
                
//             ],
//             [
//                 'nom'=> 'Diop',
//                 'prenom'=> 'Bombardjé',
//                 'adress'=> 'Mbour',
//                 'dateNaissance'=> '1983-02-11 ',
//                 'lieuNaissance'=> 'Sally',
//                 'age'=> 39,
//                 'categorie'=> 'vip'
//             ],
//             [
//                 'nom'=> 'fall',
//                 'prenom'=> 'Guayndé',
//                 'adress'=> 'Fatik',
//                 'dateNaissance'=> '1991-03-18 ',
//                 'lieuNaissance'=> 'Sally',
//                 'age'=> 32,
//                 'categorie'=> 'legé'
//             ],
//             [
//                 'nom'=> 'Sall',
//                 'prenom'=> 'Gri Bordo',
//                 'adress'=> 'Assalem',
//                 'dateNaissance'=> '1988-12-02',
//                 'lieuNaissance'=> 'Bour sine',
//                 'age'=> 37,
//                 'categorie'=> 'Moyen'
//             ],
//             [
//                 'nom'=> 'Diouf',
//                 'prenom'=> 'Khadim',
//                 'adress'=> 'Mbao',
//                 'dateNaissance'=> '1992-09-13',
//                 'lieuNaissance'=> 'Kaolack',
//                 'age'=> 28,
//                 'categorie'=> 'legé'
//             ],
//             [
//                 'nom'=> 'Baldé',
//                 'prenom'=> 'Ama',
//                 'adress'=> 'Pikine',
//                 'dateNaissance'=> '1993-07-15',
//                 'lieuNaissance'=> 'Thèse',
//                 'age'=> 27,
//                 'categorie'=> 'lourd'
//             ],
//             [
//                 'nom'=> 'Lo',
//                 'prenom'=> 'Modou',
//                 'adress'=> 'Yoff',
//                 'dateNaissance'=> '1984-08-16',
//                 'lieuNaissance'=> 'louga',
//                 'age'=> 37,
//                 'categorie'=> 'lourd'
//             ],
          
//         ]
//             );
      // dd($ok);
           

 //   Inserer 3 Combat avec  Fluent Query Builder
//  $ok=DB::table('combats')->insert(
//   [
//     [
//         'date'=> '2023-05-01',
//         'etat'=> 1,
//         'nomCombat'=> 'Grand Combat',
//         'nomLutteur1'=> 'Modou Lo',
//         'nomLutteur2'=> 'Balla Gaye',
//         'nomPromoteur'=> 'Assan Ndiaye'
//     ],
//     [
//         'date'=> '2023-04-05',
//         'etat'=> 0,
//         'nomCombat'=> 'Petie Combat',
//         'nomLutteur1'=> 'Guayndé fall',
//         'nomLutteur2'=> 'Khadim Diouf',
//         'nomPromoteur'=> 'Lic nikolaye'
//     ],
//     [
//         'date'=> '2023-12-31',
//         'etat'=> 1,
//         'nomCombat'=> 'Grand Combat',
//         'nomLutteur1'=> 'Ama Baldé',
//         'nomLutteur2'=> 'Gri Bordo',
//         'nomPromoteur'=> 'Gaston Mbengue'
//     ],
//   ]
//  );
//  dd($ok);

//   Inserer 2 résultat Combat avec  Fluent Query Builder
//  $ok=DB::table('resultat_combats')->insert(
//     [
//         [
//             'nomVinqueur'=> 'Modou Lo',
//             'nomPerdant'=> 'Balla Gaye',
//             'sansVinqueur'=> 'Null',
//             'etat'=> 1,
//         ],
//         [
//             'nomVinqueur'=> 'Ama Baldé',
//             'nomPerdant'=> 'Gri Bordo',
//             'sansVinqueur'=> 'Avertissement',
//             'etat'=> 0,
//         ],
//     ]

//  );
//  dd($ok);

    // *****   Eloqent   *****
//   récuperer tous les lutteurs dont l'age est >10 et son etat est 1 
// $lutteur= Lutteur::where('age','>',10)->get(['nom','prenom']);
// dd($lutteur);

//   récuperer tous les résultat combat dont le nom du vinqueur= 'Modou Lo' 
// $resultatcombat= ResultatCombat::where('nomVinqueur','Modou Lo')->get('nomVinqueur');
// dd($resultatcombat);

//   Affiché le nombre de résultat combat enregistre
// $resultatcombat= ResultatCombat::all();
// dd($resultatcombat);

//   Modifier la date du 3em combat 
// $combat= Combat::whereId(3)->update(

//     [
//         'date'=> '2024-01-05', 
//     ]
// );
// dd($combat);


//  Supprimer le 6 em lutteur 
// $lutteur= Lutteur::whereId(6)->delete();
// dd($lutteur);


//  Recupere l'etat et l'age dubresultat combat
// $resultatcombat= ResultatCombat::whereId(2)->get();
// dd($resultatcombat);

    return view('base');
});
