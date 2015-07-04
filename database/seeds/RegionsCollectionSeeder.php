<?php

use Illuminate\Database\Seeder;

use App\Region;

class RegionsCollectionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$conn = new \MongoClient();
		$db = $conn->selectDB(env('MONGO_DATABASE'));
		$collection = $db->regions;


		// first delete
		$collection->remove();





		$regions = array (
  0 =>
  array (
    '_id' => 'england',
    'name' => 'England',
    'slug' => 'england',
    'cities' =>
    array (
      0 =>
      array (
        '_id' => 'aldershot',
        'name' => 'Aldershot',
        'slug' => 'aldershot',
        'lat' => '51.247000',
        'lng' => '-0.761000',
      ),
      1 =>
      array (
        '_id' => 'alsagers-bank',
        'name' => 'Alsagers Bank',
        'slug' => 'alsagers-bank',
        'lat' => '53.033000',
        'lng' => '-2.291000',
      ),
      2 =>
      array (
        '_id' => 'altrincham',
        'name' => 'Altrincham',
        'slug' => 'altrincham',
        'lat' => '53.384000',
        'lng' => '-2.353000',
      ),
      3 =>
      array (
        '_id' => 'andover',
        'name' => 'Andover',
        'slug' => 'andover',
        'lat' => '51.207000',
        'lng' => '-1.477000',
      ),
      4 =>
      array (
        '_id' => 'ascot',
        'name' => 'Ascot',
        'slug' => 'ascot',
        'lat' => '0.000000',
        'lng' => '0.000000',
      ),
      5 =>
      array (
        '_id' => 'ashby-de-la-zouch',
        'name' => 'Ashby-de-la-Zouch',
        'slug' => 'ashby-de-la-zouch',
        'lat' => '52.745000',
        'lng' => '-1.474000',
      ),
      6 =>
      array (
        '_id' => 'ashford',
        'name' => 'Ashford',
        'slug' => 'ashford',
        'lat' => '51.432000',
        'lng' => '-0.468000',
      ),
      7 =>
      array (
        '_id' => 'aylesbury',
        'name' => 'Aylesbury',
        'slug' => 'aylesbury',
        'lat' => '51.814000',
        'lng' => '-0.818000',
      ),
      8 =>
      array (
        '_id' => 'banbury',
        'name' => 'Banbury',
        'slug' => 'banbury',
        'lat' => '52.061000',
        'lng' => '-1.336000',
      ),
      9 =>
      array (
        '_id' => 'barking',
        'name' => 'Barking',
        'slug' => 'barking',
        'lat' => '51.540000',
        'lng' => '0.084000',
      ),
      10 =>
      array (
        '_id' => 'barnet',
        'name' => 'Barnet',
        'slug' => 'barnet',
        'lat' => '51.644000',
        'lng' => '-0.200000',
      ),
      11 =>
      array (
        '_id' => 'barnsley',
        'name' => 'Barnsley',
        'slug' => 'barnsley',
        'lat' => '53.554000',
        'lng' => '-1.479000',
      ),
      12 =>
      array (
        '_id' => 'barnstaple',
        'name' => 'Barnstaple',
        'slug' => 'barnstaple',
        'lat' => '51.080700',
        'lng' => '-4.057460',
      ),
      13 =>
      array (
        '_id' => 'barrow-in-furness',
        'name' => 'Barrow-in-Furness',
        'slug' => 'barrow-in-furness',
        'lat' => '54.115000',
        'lng' => '-3.232000',
      ),
      14 =>
      array (
        '_id' => 'basildon',
        'name' => 'Basildon',
        'slug' => 'basildon',
        'lat' => '51.577000',
        'lng' => '0.504000',
      ),
      15 =>
      array (
        '_id' => 'basingstoke',
        'name' => 'Basingstoke',
        'slug' => 'basingstoke',
        'lat' => '51.268000',
        'lng' => '-1.090000',
      ),
      16 =>
      array (
        '_id' => 'bath',
        'name' => 'Bath',
        'slug' => 'bath',
        'lat' => '51.378000',
        'lng' => '-2.366000',
      ),
      17 =>
      array (
        '_id' => 'bedford',
        'name' => 'Bedford',
        'slug' => 'bedford',
        'lat' => '52.133000',
        'lng' => '-0.458000',
      ),
      18 =>
      array (
        '_id' => 'belper',
        'name' => 'Belper',
        'slug' => 'belper',
        'lat' => '53.023000',
        'lng' => '-1.471000',
      ),
      19 =>
      array (
        '_id' => 'benfleet',
        'name' => 'Benfleet',
        'slug' => 'benfleet',
        'lat' => '51.533300',
        'lng' => '0.550000',
      ),
      20 =>
      array (
        '_id' => 'benson',
        'name' => 'Benson',
        'slug' => 'benson',
        'lat' => '51.618000',
        'lng' => '-1.112000',
      ),
      21 =>
      array (
        '_id' => 'berkhamsted',
        'name' => 'Berkhamsted',
        'slug' => 'berkhamsted',
        'lat' => '51.766000',
        'lng' => '-0.572000',
      ),
      22 =>
      array (
        '_id' => 'berwick-upon-tweed',
        'name' => 'Berwick Upon Tweed',
        'slug' => 'berwick-upon-tweed',
        'lat' => '55.766000',
        'lng' => '-2.008000',
      ),
      23 =>
      array (
        '_id' => 'bexley',
        'name' => 'Bexley',
        'slug' => 'bexley',
        'lat' => '51.459000',
        'lng' => '0.109000',
      ),
      24 =>
      array (
        '_id' => 'bicester',
        'name' => 'Bicester',
        'slug' => 'bicester',
        'lat' => '51.898000',
        'lng' => '-1.150000',
      ),
      25 =>
      array (
        '_id' => 'billericay',
        'name' => 'Billericay',
        'slug' => 'billericay',
        'lat' => '51.624000',
        'lng' => '0.420000',
      ),
      26 =>
      array (
        '_id' => 'birkenhead',
        'name' => 'Birkenhead',
        'slug' => 'birkenhead',
        'lat' => '53.389000',
        'lng' => '-3.045000',
      ),
      27 =>
      array (
        '_id' => 'birmingham',
        'name' => 'Birmingham',
        'slug' => 'birmingham',
        'lat' => '52.485000',
        'lng' => '-1.860000',
      ),
      28 =>
      array (
        '_id' => 'blackburn',
        'name' => 'Blackburn',
        'slug' => 'blackburn',
        'lat' => '53.743000',
        'lng' => '-2.478000',
      ),
      29 =>
      array (
        '_id' => 'blackpool',
        'name' => 'Blackpool',
        'slug' => 'blackpool',
        'lat' => '53.820000',
        'lng' => '-3.041000',
      ),
      30 =>
      array (
        '_id' => 'bolton',
        'name' => 'Bolton',
        'slug' => 'bolton',
        'lat' => '53.572000',
        'lng' => '-2.430000',
      ),
      31 =>
      array (
        '_id' => 'bournemouth',
        'name' => 'Bournemouth',
        'slug' => 'bournemouth',
        'lat' => '50.722000',
        'lng' => '-1.880000',
      ),
      32 =>
      array (
        '_id' => 'bracknell',
        'name' => 'Bracknell',
        'slug' => 'bracknell',
        'lat' => '51.408000',
        'lng' => '-0.756000',
      ),
      33 =>
      array (
        '_id' => 'bradford',
        'name' => 'Bradford',
        'slug' => 'bradford',
        'lat' => '53.788000',
        'lng' => '-1.750000',
      ),
      34 =>
      array (
        '_id' => 'brentwood',
        'name' => 'Brentwood',
        'slug' => 'brentwood',
        'lat' => '51.617000',
        'lng' => '0.319000',
      ),
      35 =>
      array (
        '_id' => 'brighton',
        'name' => 'Brighton',
        'slug' => 'brighton',
        'lat' => '50.843000',
        'lng' => '-0.132000',
      ),
      36 =>
      array (
        '_id' => 'bristol',
        'name' => 'Bristol',
        'slug' => 'bristol',
        'lat' => '51.477000',
        'lng' => '-2.569000',
      ),
      37 =>
      array (
        '_id' => 'broomfield',
        'name' => 'Broomfield',
        'slug' => 'broomfield',
        'lat' => '51.355000',
        'lng' => '1.153000',
      ),
      38 =>
      array (
        '_id' => 'burgess-hill',
        'name' => 'Burgess Hill',
        'slug' => 'burgess-hill',
        'lat' => '50.959000',
        'lng' => '-0.127000',
      ),
      39 =>
      array (
        '_id' => 'burnley',
        'name' => 'Burnley',
        'slug' => 'burnley',
        'lat' => '53.788000',
        'lng' => '-2.250000',
      ),
      40 =>
      array (
        '_id' => 'burton-upon-tren',
        'name' => 'Burton Upon Tren',
        'slug' => 'burton-upon-tren',
        'lat' => '52.799000',
        'lng' => '-1.637000',
      ),
      41 =>
      array (
        '_id' => 'bury',
        'name' => 'Bury',
        'slug' => 'bury',
        'lat' => '52.434000',
        'lng' => '-0.110000',
      ),
      42 =>
      array (
        '_id' => 'bury-st-edmunds',
        'name' => 'Bury St Edmunds',
        'slug' => 'bury-st-edmunds',
        'lat' => '52.247000',
        'lng' => '0.718000',
      ),
      43 =>
      array (
        '_id' => 'camberley',
        'name' => 'Camberley',
        'slug' => 'camberley',
        'lat' => '51.336000',
        'lng' => '-0.729000',
      ),
      44 =>
      array (
        '_id' => 'cambridge',
        'name' => 'Cambridge',
        'slug' => 'cambridge',
        'lat' => '52.205000',
        'lng' => '0.144000',
      ),
      45 =>
      array (
        '_id' => 'canterbury',
        'name' => 'Canterbury',
        'slug' => 'canterbury',
        'lat' => '51.276000',
        'lng' => '1.076000',
      ),
      46 =>
      array (
        '_id' => 'carlisle',
        'name' => 'Carlisle',
        'slug' => 'carlisle',
        'lat' => '54.890000',
        'lng' => '-2.943000',
      ),
      47 =>
      array (
        '_id' => 'chalgrove',
        'name' => 'Chalgrove',
        'slug' => 'chalgrove',
        'lat' => '51.668700',
        'lng' => '-1.081590',
      ),
      48 =>
      array (
        '_id' => 'chatham',
        'name' => 'Chatham',
        'slug' => 'chatham',
        'lat' => '51.361000',
        'lng' => '0.535000',
      ),
      49 =>
      array (
        '_id' => 'chelmsford',
        'name' => 'Chelmsford',
        'slug' => 'chelmsford',
        'lat' => '51.731000',
        'lng' => '0.469000',
      ),
      50 =>
      array (
        '_id' => 'cheltenham',
        'name' => 'Cheltenham',
        'slug' => 'cheltenham',
        'lat' => '51.901000',
        'lng' => '-2.080000',
      ),
      51 =>
      array (
        '_id' => 'chester',
        'name' => 'Chester',
        'slug' => 'chester',
        'lat' => '53.192000',
        'lng' => '-2.891000',
      ),
      52 =>
      array (
        '_id' => 'chesterfield',
        'name' => 'Chesterfield',
        'slug' => 'chesterfield',
        'lat' => '53.235900',
        'lng' => '-1.424600',
      ),
      53 =>
      array (
        '_id' => 'chichester',
        'name' => 'Chichester',
        'slug' => 'chichester',
        'lat' => '50.833000',
        'lng' => '-0.772000',
      ),
      54 =>
      array (
        '_id' => 'chorley',
        'name' => 'Chorley',
        'slug' => 'chorley',
        'lat' => '53.652000',
        'lng' => '-2.628000',
      ),
      55 =>
      array (
        '_id' => 'church-stretton',
        'name' => 'Church Stretton',
        'slug' => 'church-stretton',
        'lat' => '52.536000',
        'lng' => '-2.804000',
      ),
      56 =>
      array (
        '_id' => 'colchester',
        'name' => 'Colchester',
        'slug' => 'colchester',
        'lat' => '51.892000',
        'lng' => '0.900000',
      ),
      57 =>
      array (
        '_id' => 'congleton',
        'name' => 'Congleton',
        'slug' => 'congleton',
        'lat' => '53.168000',
        'lng' => '-2.202000',
      ),
      58 =>
      array (
        '_id' => 'coniston',
        'name' => 'Coniston',
        'slug' => 'coniston',
        'lat' => '54.368000',
        'lng' => '-3.070000',
      ),
      59 =>
      array (
        '_id' => 'corsham',
        'name' => 'Corsham',
        'slug' => 'corsham',
        'lat' => '51.431200',
        'lng' => '-2.185270',
      ),
      60 =>
      array (
        '_id' => 'coventry',
        'name' => 'Coventry',
        'slug' => 'coventry',
        'lat' => '52.403000',
        'lng' => '-1.508000',
      ),
      61 =>
      array (
        '_id' => 'crawley',
        'name' => 'Crawley',
        'slug' => 'crawley',
        'lat' => '51.113000',
        'lng' => '-0.178000',
      ),
      62 =>
      array (
        '_id' => 'crewe',
        'name' => 'Crewe',
        'slug' => 'crewe',
        'lat' => '53.096000',
        'lng' => '-2.441000',
      ),
      63 =>
      array (
        '_id' => 'croydon',
        'name' => 'Croydon',
        'slug' => 'croydon',
        'lat' => '52.128000',
        'lng' => '-0.079000',
      ),
      64 =>
      array (
        '_id' => 'dartford',
        'name' => 'Dartford',
        'slug' => 'dartford',
        'lat' => '51.439000',
        'lng' => '0.194000',
      ),
      65 =>
      array (
        '_id' => 'dartmouth',
        'name' => 'Dartmouth',
        'slug' => 'dartmouth',
        'lat' => '50.352000',
        'lng' => '-3.582000',
      ),
      66 =>
      array (
        '_id' => 'derby',
        'name' => 'Derby',
        'slug' => 'derby',
        'lat' => '52.915000',
        'lng' => '-1.472000',
      ),
      67 =>
      array (
        '_id' => 'doncaster',
        'name' => 'Doncaster',
        'slug' => 'doncaster',
        'lat' => '53.516000',
        'lng' => '-1.133000',
      ),
      68 =>
      array (
        '_id' => 'dorchester',
        'name' => 'Dorchester',
        'slug' => 'dorchester',
        'lat' => '50.713000',
        'lng' => '-2.446000',
      ),
      69 =>
      array (
        '_id' => 'dorking',
        'name' => 'Dorking',
        'slug' => 'dorking',
        'lat' => '51.232000',
        'lng' => '-0.331000',
      ),
      70 =>
      array (
        '_id' => 'dover',
        'name' => 'Dover',
        'slug' => 'dover',
        'lat' => '53.509000',
        'lng' => '-2.581000',
      ),
      71 =>
      array (
        '_id' => 'dudley',
        'name' => 'Dudley',
        'slug' => 'dudley',
        'lat' => '52.512000',
        'lng' => '-2.096000',
      ),
      72 =>
      array (
        '_id' => 'durham',
        'name' => 'Durham',
        'slug' => 'durham',
        'lat' => '54.777000',
        'lng' => '-1.572000',
      ),
      73 =>
      array (
        '_id' => 'east-molesey',
        'name' => 'East Molesey',
        'slug' => 'east-molesey',
        'lat' => '51.394000',
        'lng' => '-0.354000',
      ),
      74 =>
      array (
        '_id' => 'east-preston',
        'name' => 'East Preston',
        'slug' => 'east-preston',
        'lat' => '50.812000',
        'lng' => '-0.474000',
      ),
      75 =>
      array (
        '_id' => 'eastbourne',
        'name' => 'Eastbourne',
        'slug' => 'eastbourne',
        'lat' => '50.782000',
        'lng' => '0.263000',
      ),
      76 =>
      array (
        '_id' => 'eastrea',
        'name' => 'Eastrea',
        'slug' => 'eastrea',
        'lat' => '52.560000',
        'lng' => '-0.089000',
      ),
      77 =>
      array (
        '_id' => 'ellesmere',
        'name' => 'Ellesmere',
        'slug' => 'ellesmere',
        'lat' => '52.904000',
        'lng' => '-2.900000',
      ),
      78 =>
      array (
        '_id' => 'ely',
        'name' => 'Ely',
        'slug' => 'ely',
        'lat' => '52.400000',
        'lng' => '0.271000',
      ),
      79 =>
      array (
        '_id' => 'enfield',
        'name' => 'Enfield',
        'slug' => 'enfield',
        'lat' => '51.651000',
        'lng' => '-0.070000',
      ),
      80 =>
      array (
        '_id' => 'epsom',
        'name' => 'Epsom',
        'slug' => 'epsom',
        'lat' => '51.330000',
        'lng' => '-0.270000',
      ),
      81 =>
      array (
        '_id' => 'exeter',
        'name' => 'Exeter',
        'slug' => 'exeter',
        'lat' => '50.722000',
        'lng' => '-3.523000',
      ),
      82 =>
      array (
        '_id' => 'falmouth',
        'name' => 'Falmouth',
        'slug' => 'falmouth',
        'lat' => '50.151000',
        'lng' => '-5.073000',
      ),
      83 =>
      array (
        '_id' => 'faringdon',
        'name' => 'Faringdon',
        'slug' => 'faringdon',
        'lat' => '51.657200',
        'lng' => '-1.584890',
      ),
      84 =>
      array (
        '_id' => 'farmington',
        'name' => 'Farmington',
        'slug' => 'farmington',
        'lat' => '51.838000',
        'lng' => '-1.804000',
      ),
      85 =>
      array (
        '_id' => 'farnham',
        'name' => 'Farnham',
        'slug' => 'farnham',
        'lat' => '51.211000',
        'lng' => '-0.790000',
      ),
      86 =>
      array (
        '_id' => 'feltham',
        'name' => 'Feltham',
        'slug' => 'feltham',
        'lat' => '51.445200',
        'lng' => '-0.410430',
      ),
      87 =>
      array (
        '_id' => 'fleet',
        'name' => 'Fleet',
        'slug' => 'fleet',
        'lat' => '51.283000',
        'lng' => '-0.846000',
      ),
      88 =>
      array (
        '_id' => 'frosterley',
        'name' => 'Frosterley',
        'slug' => 'frosterley',
        'lat' => '54.732000',
        'lng' => '-1.961000',
      ),
      89 =>
      array (
        '_id' => 'glastonbury',
        'name' => 'Glastonbury',
        'slug' => 'glastonbury',
        'lat' => '51.152000',
        'lng' => '-2.708000',
      ),
      90 =>
      array (
        '_id' => 'gloucester',
        'name' => 'Gloucester',
        'slug' => 'gloucester',
        'lat' => '51.864000',
        'lng' => '-2.240000',
      ),
      91 =>
      array (
        '_id' => 'gosport',
        'name' => 'Gosport',
        'slug' => 'gosport',
        'lat' => '50.800000',
        'lng' => '-1.156000',
      ),
      92 =>
      array (
        '_id' => 'gravesend',
        'name' => 'Gravesend',
        'slug' => 'gravesend',
        'lat' => '51.445000',
        'lng' => '0.382000',
      ),
      93 =>
      array (
        '_id' => 'grays',
        'name' => 'Grays',
        'slug' => 'grays',
        'lat' => '51.473000',
        'lng' => '0.326000',
      ),
      94 =>
      array (
        '_id' => 'great-wilbraham',
        'name' => 'Great Wilbraham',
        'slug' => 'great-wilbraham',
        'lat' => '52.194000',
        'lng' => '0.261000',
      ),
      95 =>
      array (
        '_id' => 'grimsby',
        'name' => 'Grimsby',
        'slug' => 'grimsby',
        'lat' => '53.566000',
        'lng' => '-0.075000',
      ),
      96 =>
      array (
        '_id' => 'guildford',
        'name' => 'Guildford',
        'slug' => 'guildford',
        'lat' => '51.235000',
        'lng' => '-0.575000',
      ),
      97 =>
      array (
        '_id' => 'guilford',
        'name' => 'Guilford',
        'slug' => 'guilford',
        'lat' => '51.747000',
        'lng' => '-4.919000',
      ),
      98 =>
      array (
        '_id' => 'halifax',
        'name' => 'Halifax',
        'slug' => 'halifax',
        'lat' => '53.726000',
        'lng' => '-1.856000',
      ),
      99 =>
      array (
        '_id' => 'harlow',
        'name' => 'Harlow',
        'slug' => 'harlow',
        'lat' => '51.765000',
        'lng' => '0.109000',
      ),
      100 =>
      array (
        '_id' => 'harpenden',
        'name' => 'Harpenden',
        'slug' => 'harpenden',
        'lat' => '51.817000',
        'lng' => '-0.353000',
      ),
      101 =>
      array (
        '_id' => 'harrow',
        'name' => 'Harrow',
        'slug' => 'harrow',
        'lat' => '51.583000',
        'lng' => '-0.347000',
      ),
      102 =>
      array (
        '_id' => 'hartlepool',
        'name' => 'Hartlepool',
        'slug' => 'hartlepool',
        'lat' => '54.685000',
        'lng' => '-1.217000',
      ),
      103 =>
      array (
        '_id' => 'haslemere',
        'name' => 'Haslemere',
        'slug' => 'haslemere',
        'lat' => '0.000000',
        'lng' => '0.000000',
      ),
      104 =>
      array (
        '_id' => 'hastings',
        'name' => 'Hastings',
        'slug' => 'hastings',
        'lat' => '50.865000',
        'lng' => '0.580000',
      ),
      105 =>
      array (
        '_id' => 'hatfield',
        'name' => 'Hatfield',
        'slug' => 'hatfield',
        'lat' => '51.752000',
        'lng' => '-0.225000',
      ),
      106 =>
      array (
        '_id' => 'haverhill',
        'name' => 'Haverhill',
        'slug' => 'haverhill',
        'lat' => '52.082000',
        'lng' => '0.430000',
      ),
      107 =>
      array (
        '_id' => 'hemel-hempstead',
        'name' => 'Hemel Hempstead',
        'slug' => 'hemel-hempstead',
        'lat' => '51.756000',
        'lng' => '-0.457000',
      ),
      108 =>
      array (
        '_id' => 'hereford',
        'name' => 'Hereford',
        'slug' => 'hereford',
        'lat' => '52.060000',
        'lng' => '-2.708000',
      ),
      109 =>
      array (
        '_id' => 'hertford',
        'name' => 'Hertford',
        'slug' => 'hertford',
        'lat' => '51.795000',
        'lng' => '-0.078000',
      ),
      110 =>
      array (
        '_id' => 'heston',
        'name' => 'Heston',
        'slug' => 'heston',
        'lat' => '51.485000',
        'lng' => '-0.380000',
      ),
      111 =>
      array (
        '_id' => 'hexham',
        'name' => 'Hexham',
        'slug' => 'hexham',
        'lat' => '54.966000',
        'lng' => '-2.102000',
      ),
      112 =>
      array (
        '_id' => 'high-wycombe',
        'name' => 'High Wycombe',
        'slug' => 'high-wycombe',
        'lat' => '51.633000',
        'lng' => '-0.750000',
      ),
      113 =>
      array (
        '_id' => 'hoddesdon',
        'name' => 'Hoddesdon',
        'slug' => 'hoddesdon',
        'lat' => '51.758000',
        'lng' => '-0.022000',
      ),
      114 =>
      array (
        '_id' => 'hornchurch',
        'name' => 'Hornchurch',
        'slug' => 'hornchurch',
        'lat' => '51.556000',
        'lng' => '0.214000',
      ),
      115 =>
      array (
        '_id' => 'horsham',
        'name' => 'Horsham',
        'slug' => 'horsham',
        'lat' => '51.070000',
        'lng' => '-0.323000',
      ),
      116 =>
      array (
        '_id' => 'huddersfield',
        'name' => 'Huddersfield',
        'slug' => 'huddersfield',
        'lat' => '53.645000',
        'lng' => '-1.781000',
      ),
      117 =>
      array (
        '_id' => 'hull-end',
        'name' => 'Hull End',
        'slug' => 'hull-end',
        'lat' => '53.339000',
        'lng' => '-1.917000',
      ),
      118 =>
      array (
        '_id' => 'huntingdon',
        'name' => 'Huntingdon',
        'slug' => 'huntingdon',
        'lat' => '52.336000',
        'lng' => '-0.172000',
      ),
      119 =>
      array (
        '_id' => 'hyde',
        'name' => 'Hyde',
        'slug' => 'hyde',
        'lat' => '50.729000',
        'lng' => '-2.744000',
      ),
      120 =>
      array (
        '_id' => 'ilford',
        'name' => 'Ilford',
        'slug' => 'ilford',
        'lat' => '51.558000',
        'lng' => '0.085000',
      ),
      121 =>
      array (
        '_id' => 'ipswich',
        'name' => 'Ipswich',
        'slug' => 'ipswich',
        'lat' => '52.056000',
        'lng' => '1.158000',
      ),
      122 =>
      array (
        '_id' => 'keighley',
        'name' => 'Keighley',
        'slug' => 'keighley',
        'lat' => '53.869000',
        'lng' => '-1.901000',
      ),
      123 =>
      array (
        '_id' => 'kendal',
        'name' => 'Kendal',
        'slug' => 'kendal',
        'lat' => '54.326000',
        'lng' => '-2.746000',
      ),
      124 =>
      array (
        '_id' => 'kenilworth',
        'name' => 'Kenilworth',
        'slug' => 'kenilworth',
        'lat' => '52.340000',
        'lng' => '-1.567000',
      ),
      125 =>
      array (
        '_id' => 'kettering',
        'name' => 'Kettering',
        'slug' => 'kettering',
        'lat' => '52.397000',
        'lng' => '-0.714000',
      ),
      126 =>
      array (
        '_id' => 'kidsgrove',
        'name' => 'Kidsgrove',
        'slug' => 'kidsgrove',
        'lat' => '53.087000',
        'lng' => '-2.246000',
      ),
      127 =>
      array (
        '_id' => 'kingston-upon-hull',
        'name' => 'Kingston Upon Hull',
        'slug' => 'kingston-upon-hull',
        'lat' => '53.750000',
        'lng' => '-0.339000',
      ),
      128 =>
      array (
        '_id' => 'lakenheath',
        'name' => 'Lakenheath',
        'slug' => 'lakenheath',
        'lat' => '52.413000',
        'lng' => '0.522000',
      ),
      129 =>
      array (
        '_id' => 'lancaster',
        'name' => 'Lancaster',
        'slug' => 'lancaster',
        'lat' => '54.047000',
        'lng' => '-2.802000',
      ),
      130 =>
      array (
        '_id' => 'laughton',
        'name' => 'Laughton',
        'slug' => 'laughton',
        'lat' => '52.870000',
        'lng' => '-0.403000',
      ),
      131 =>
      array (
        '_id' => 'leamington',
        'name' => 'Leamington',
        'slug' => 'leamington',
        'lat' => '52.303000',
        'lng' => '-1.347000',
      ),
      132 =>
      array (
        '_id' => 'leeds',
        'name' => 'Leeds',
        'slug' => 'leeds',
        'lat' => '53.806000',
        'lng' => '-1.537000',
      ),
      133 =>
      array (
        '_id' => 'leek',
        'name' => 'Leek',
        'slug' => 'leek',
        'lat' => '53.105000',
        'lng' => '-2.022000',
      ),
      134 =>
      array (
        '_id' => 'leicester',
        'name' => 'Leicester',
        'slug' => 'leicester',
        'lat' => '52.635000',
        'lng' => '-1.135000',
      ),
      135 =>
      array (
        '_id' => 'leigh',
        'name' => 'Leigh',
        'slug' => 'leigh',
        'lat' => '50.897000',
        'lng' => '-3.813000',
      ),
      136 =>
      array (
        '_id' => 'letchworth',
        'name' => 'Letchworth',
        'slug' => 'letchworth',
        'lat' => '51.977000',
        'lng' => '-0.231000',
      ),
      137 =>
      array (
        '_id' => 'lewes',
        'name' => 'Lewes',
        'slug' => 'lewes',
        'lat' => '50.876000',
        'lng' => '0.011000',
      ),
      138 =>
      array (
        '_id' => 'leyland',
        'name' => 'Leyland',
        'slug' => 'leyland',
        'lat' => '53.697000',
        'lng' => '-2.689000',
      ),
      139 =>
      array (
        '_id' => 'lichfield',
        'name' => 'Lichfield',
        'slug' => 'lichfield',
        'lat' => '52.683000',
        'lng' => '-1.830000',
      ),
      140 =>
      array (
        '_id' => 'lincoln',
        'name' => 'Lincoln',
        'slug' => 'lincoln',
        'lat' => '53.231000',
        'lng' => '-0.539000',
      ),
      141 =>
      array (
        '_id' => 'little-chalfont',
        'name' => 'Little Chalfont',
        'slug' => 'little-chalfont',
        'lat' => '51.667000',
        'lng' => '-0.561000',
      ),
      142 =>
      array (
        '_id' => 'liverpool',
        'name' => 'Liverpool',
        'slug' => 'liverpool',
        'lat' => '53.416000',
        'lng' => '-2.940000',
      ),
      143 =>
      array (
        '_id' => 'london',
        'name' => 'London',
        'slug' => 'london',
        'lat' => '51.517000',
        'lng' => '-0.105000',
      ),
      144 =>
      array (
        '_id' => 'loughborough',
        'name' => 'Loughborough',
        'slug' => 'loughborough',
        'lat' => '52.770000',
        'lng' => '-1.207000',
      ),
      145 =>
      array (
        '_id' => 'louth',
        'name' => 'Louth',
        'slug' => 'louth',
        'lat' => '53.367000',
        'lng' => '0.007000',
      ),
      146 =>
      array (
        '_id' => 'lowestoft',
        'name' => 'Lowestoft',
        'slug' => 'lowestoft',
        'lat' => '52.472000',
        'lng' => '1.718000',
      ),
      147 =>
      array (
        '_id' => 'luton',
        'name' => 'Luton',
        'slug' => 'luton',
        'lat' => '51.881000',
        'lng' => '-0.409000',
      ),
      148 =>
      array (
        '_id' => 'maidenhead',
        'name' => 'Maidenhead',
        'slug' => 'maidenhead',
        'lat' => '51.525000',
        'lng' => '-0.739000',
      ),
      149 =>
      array (
        '_id' => 'maidstone',
        'name' => 'Maidstone',
        'slug' => 'maidstone',
        'lat' => '51.271000',
        'lng' => '0.531000',
      ),
      150 =>
      array (
        '_id' => 'manchester',
        'name' => 'Manchester',
        'slug' => 'manchester',
        'lat' => '53.483000',
        'lng' => '-2.249000',
      ),
      151 =>
      array (
        '_id' => 'mansfield',
        'name' => 'Mansfield',
        'slug' => 'mansfield',
        'lat' => '53.148000',
        'lng' => '-1.200000',
      ),
      152 =>
      array (
        '_id' => 'margate',
        'name' => 'Margate',
        'slug' => 'margate',
        'lat' => '51.384000',
        'lng' => '1.385000',
      ),
      153 =>
      array (
        '_id' => 'marlborough',
        'name' => 'Marlborough',
        'slug' => 'marlborough',
        'lat' => '51.424000',
        'lng' => '-1.734000',
      ),
      154 =>
      array (
        '_id' => 'marlow',
        'name' => 'Marlow',
        'slug' => 'marlow',
        'lat' => '51.570000',
        'lng' => '-0.766000',
      ),
      155 =>
      array (
        '_id' => 'melborne',
        'name' => 'Melborne',
        'slug' => 'melborne',
        'lat' => '0.000000',
        'lng' => '0.000000',
      ),
      156 =>
      array (
        '_id' => 'melton-mowbray',
        'name' => 'Melton Mowbray',
        'slug' => 'melton-mowbray',
        'lat' => '52.767000',
        'lng' => '-0.881000',
      ),
      157 =>
      array (
        '_id' => 'merton',
        'name' => 'Merton',
        'slug' => 'merton',
        'lat' => '51.853000',
        'lng' => '-1.165000',
      ),
      158 =>
      array (
        '_id' => 'middlesbrough',
        'name' => 'Middlesbrough',
        'slug' => 'middlesbrough',
        'lat' => '54.559000',
        'lng' => '-1.204000',
      ),
      159 =>
      array (
        '_id' => 'millom',
        'name' => 'Millom',
        'slug' => 'millom',
        'lat' => '54.213000',
        'lng' => '-3.265000',
      ),
      160 =>
      array (
        '_id' => 'milton-keynes',
        'name' => 'Milton Keynes',
        'slug' => 'milton-keynes',
        'lat' => '52.029000',
        'lng' => '-0.754000',
      ),
      161 =>
      array (
        '_id' => 'minehead',
        'name' => 'Minehead',
        'slug' => 'minehead',
        'lat' => '51.205500',
        'lng' => '-3.478300',
      ),
      162 =>
      array (
        '_id' => 'nantwich',
        'name' => 'Nantwich',
        'slug' => 'nantwich',
        'lat' => '53.068000',
        'lng' => '-2.515000',
      ),
      163 =>
      array (
        '_id' => 'newbury',
        'name' => 'Newbury',
        'slug' => 'newbury',
        'lat' => '51.404000',
        'lng' => '-1.317000',
      ),
      164 =>
      array (
        '_id' => 'newcastle-upon-tyne',
        'name' => 'Newcastle Upon Tyne',
        'slug' => 'newcastle-upon-tyne',
        'lat' => '54.977900',
        'lng' => '-1.613230',
      ),
      165 =>
      array (
        '_id' => 'newquay',
        'name' => 'Newquay',
        'slug' => 'newquay',
        'lat' => '50.412000',
        'lng' => '-5.076000',
      ),
      166 =>
      array (
        '_id' => 'northallerton',
        'name' => 'Northallerton',
        'slug' => 'northallerton',
        'lat' => '54.345000',
        'lng' => '-1.423000',
      ),
      167 =>
      array (
        '_id' => 'northampton',
        'name' => 'Northampton',
        'slug' => 'northampton',
        'lat' => '52.246000',
        'lng' => '-0.894000',
      ),
      168 =>
      array (
        '_id' => 'northwich',
        'name' => 'Northwich',
        'slug' => 'northwich',
        'lat' => '53.257000',
        'lng' => '-2.517000',
      ),
      169 =>
      array (
        '_id' => 'northwold',
        'name' => 'northwold',
        'slug' => 'northwold',
        'lat' => '52.547000',
        'lng' => '0.589000',
      ),
      170 =>
      array (
        '_id' => 'norwich',
        'name' => 'Norwich',
        'slug' => 'norwich',
        'lat' => '52.628000',
        'lng' => '1.303000',
      ),
      171 =>
      array (
        '_id' => 'nottingham',
        'name' => 'Nottingham',
        'slug' => 'nottingham',
        'lat' => '52.968000',
        'lng' => '-1.159000',
      ),
      172 =>
      array (
        '_id' => 'oldham',
        'name' => 'Oldham',
        'slug' => 'oldham',
        'lat' => '53.537000',
        'lng' => '-2.113000',
      ),
      173 =>
      array (
        '_id' => 'oxford',
        'name' => 'Oxford',
        'slug' => 'oxford',
        'lat' => '51.754000',
        'lng' => '-1.254000',
      ),
      174 =>
      array (
        '_id' => 'oxshott',
        'name' => 'Oxshott',
        'slug' => 'oxshott',
        'lat' => '51.332000',
        'lng' => '-0.356000',
      ),
      175 =>
      array (
        '_id' => 'penrith',
        'name' => 'Penrith',
        'slug' => 'penrith',
        'lat' => '54.667000',
        'lng' => '-2.752000',
      ),
      176 =>
      array (
        '_id' => 'penzance',
        'name' => 'Penzance',
        'slug' => 'penzance',
        'lat' => '50.120000',
        'lng' => '-5.547000',
      ),
      177 =>
      array (
        '_id' => 'peterborough',
        'name' => 'Peterborough',
        'slug' => 'peterborough',
        'lat' => '52.580000',
        'lng' => '-0.236000',
      ),
      178 =>
      array (
        '_id' => 'plymouth',
        'name' => 'Plymouth',
        'slug' => 'plymouth',
        'lat' => '50.388000',
        'lng' => '-4.146000',
      ),
      179 =>
      array (
        '_id' => 'poole',
        'name' => 'Poole',
        'slug' => 'poole',
        'lat' => '50.723000',
        'lng' => '-1.979000',
      ),
      180 =>
      array (
        '_id' => 'portsmouth',
        'name' => 'Portsmouth',
        'slug' => 'portsmouth',
        'lat' => '50.809000',
        'lng' => '-1.070000',
      ),
      181 =>
      array (
        '_id' => 'preston',
        'name' => 'Preston',
        'slug' => 'preston',
        'lat' => '53.760000',
        'lng' => '-2.705000',
      ),
      182 =>
      array (
        '_id' => 'radway-green',
        'name' => 'Radway Green',
        'slug' => 'radway-green',
        'lat' => '53.087000',
        'lng' => '-2.336000',
      ),
      183 =>
      array (
        '_id' => 'ramsgate',
        'name' => 'Ramsgate',
        'slug' => 'ramsgate',
        'lat' => '51.329000',
        'lng' => '1.424000',
      ),
      184 =>
      array (
        '_id' => 'reading',
        'name' => 'Reading',
        'slug' => 'reading',
        'lat' => '51.455000',
        'lng' => '-0.971000',
      ),
      185 =>
      array (
        '_id' => 'redditch',
        'name' => 'Redditch',
        'slug' => 'redditch',
        'lat' => '52.305000',
        'lng' => '-1.934000',
      ),
      186 =>
      array (
        '_id' => 'ringwood',
        'name' => 'Ringwood',
        'slug' => 'ringwood',
        'lat' => '50.848000',
        'lng' => '-1.780000',
      ),
      187 =>
      array (
        '_id' => 'ripon',
        'name' => 'Ripon',
        'slug' => 'ripon',
        'lat' => '54.138000',
        'lng' => '-1.518000',
      ),
      188 =>
      array (
        '_id' => 'rochester',
        'name' => 'Rochester',
        'slug' => 'rochester',
        'lat' => '51.389000',
        'lng' => '0.480000',
      ),
      189 =>
      array (
        '_id' => 'romford',
        'name' => 'Romford',
        'slug' => 'romford',
        'lat' => '50.884000',
        'lng' => '-1.893000',
      ),
      190 =>
      array (
        '_id' => 'rugby',
        'name' => 'Rugby',
        'slug' => 'rugby',
        'lat' => '52.375000',
        'lng' => '-1.258000',
      ),
      191 =>
      array (
        '_id' => 'runcorn',
        'name' => 'Runcorn',
        'slug' => 'runcorn',
        'lat' => '53.328000',
        'lng' => '-2.713000',
      ),
      192 =>
      array (
        '_id' => 'rustington',
        'name' => 'Rustington',
        'slug' => 'rustington',
        'lat' => '50.812000',
        'lng' => '-0.502000',
      ),
      193 =>
      array (
        '_id' => 'saint-albans',
        'name' => 'Saint Albans',
        'slug' => 'saint-albans',
        'lat' => '51.749300',
        'lng' => '-0.337690',
      ),
      194 =>
      array (
        '_id' => 'salford',
        'name' => 'Salford',
        'slug' => 'salford',
        'lat' => '53.483000',
        'lng' => '-2.294000',
      ),
      195 =>
      array (
        '_id' => 'salisbury',
        'name' => 'Salisbury',
        'slug' => 'salisbury',
        'lat' => '51.073000',
        'lng' => '-1.793000',
      ),
      196 =>
      array (
        '_id' => 'sandwich',
        'name' => 'Sandwich',
        'slug' => 'sandwich',
        'lat' => '51.277000',
        'lng' => '1.348000',
      ),
      197 =>
      array (
        '_id' => 'sandy',
        'name' => 'Sandy',
        'slug' => 'sandy',
        'lat' => '52.131000',
        'lng' => '-0.298000',
      ),
      198 =>
      array (
        '_id' => 'scarborough',
        'name' => 'Scarborough',
        'slug' => 'scarborough',
        'lat' => '54.281000',
        'lng' => '-0.410000',
      ),
      199 =>
      array (
        '_id' => 'seaford',
        'name' => 'Seaford',
        'slug' => 'seaford',
        'lat' => '50.775000',
        'lng' => '0.106000',
      ),
      200 =>
      array (
        '_id' => 'shaftesbury',
        'name' => 'Shaftesbury',
        'slug' => 'shaftesbury',
        'lat' => '51.001000',
        'lng' => '-2.192000',
      ),
      201 =>
      array (
        '_id' => 'sheffield',
        'name' => 'Sheffield',
        'slug' => 'sheffield',
        'lat' => '53.383000',
        'lng' => '-1.466000',
      ),
      202 =>
      array (
        '_id' => 'shrewsbury',
        'name' => 'Shrewsbury',
        'slug' => 'shrewsbury',
        'lat' => '52.707000',
        'lng' => '-2.748000',
      ),
      203 =>
      array (
        '_id' => 'slough',
        'name' => 'Slough',
        'slug' => 'slough',
        'lat' => '51.505000',
        'lng' => '-0.566000',
      ),
      204 =>
      array (
        '_id' => 'solihull',
        'name' => 'Solihull',
        'slug' => 'solihull',
        'lat' => '52.413000',
        'lng' => '-1.772000',
      ),
      205 =>
      array (
        '_id' => 'southampton',
        'name' => 'Southampton',
        'slug' => 'southampton',
        'lat' => '50.919000',
        'lng' => '-1.395000',
      ),
      206 =>
      array (
        '_id' => 'southborough',
        'name' => 'Southborough',
        'slug' => 'southborough',
        'lat' => '51.159000',
        'lng' => '0.267000',
      ),
      207 =>
      array (
        '_id' => 'southend-on-sea',
        'name' => 'Southend-on-Sea',
        'slug' => 'southend-on-sea',
        'lat' => '51.546000',
        'lng' => '0.704000',
      ),
      208 =>
      array (
        '_id' => 'southport',
        'name' => 'Southport',
        'slug' => 'southport',
        'lat' => '53.650000',
        'lng' => '-2.991000',
      ),
      209 =>
      array (
        '_id' => 'st-albans',
        'name' => 'St Albans',
        'slug' => 'st-albans',
        'lat' => '51.754000',
        'lng' => '-0.327000',
      ),
      210 =>
      array (
        '_id' => 'st-helens',
        'name' => 'St Helens',
        'slug' => 'st-helens',
        'lat' => '53.454000',
        'lng' => '-2.746000',
      ),
      211 =>
      array (
        '_id' => 'st-ives',
        'name' => 'St Ives',
        'slug' => 'st-ives',
        'lat' => '50.212000',
        'lng' => '-5.483000',
      ),
      212 =>
      array (
        '_id' => 'stafford',
        'name' => 'Stafford',
        'slug' => 'stafford',
        'lat' => '52.809000',
        'lng' => '-2.111000',
      ),
      213 =>
      array (
        '_id' => 'staines',
        'name' => 'Staines',
        'slug' => 'staines',
        'lat' => '51.432000',
        'lng' => '-0.497000',
      ),
      214 =>
      array (
        '_id' => 'stansted',
        'name' => 'Stansted',
        'slug' => 'stansted',
        'lat' => '51.898000',
        'lng' => '0.202000',
      ),
      215 =>
      array (
        '_id' => 'stevenage',
        'name' => 'Stevenage',
        'slug' => 'stevenage',
        'lat' => '51.905000',
        'lng' => '-0.190000',
      ),
      216 =>
      array (
        '_id' => 'stockport',
        'name' => 'Stockport',
        'slug' => 'stockport',
        'lat' => '53.411000',
        'lng' => '-2.158000',
      ),
      217 =>
      array (
        '_id' => 'stockton-on-tees',
        'name' => 'Stockton-on-Tees',
        'slug' => 'stockton-on-tees',
        'lat' => '54.578000',
        'lng' => '-1.327000',
      ),
      218 =>
      array (
        '_id' => 'stoke-on-trent',
        'name' => 'Stoke On Trent',
        'slug' => 'stoke-on-trent',
        'lat' => '53.028800',
        'lng' => '-2.174700',
      ),
      219 =>
      array (
        '_id' => 'stratford-upon-avon',
        'name' => 'Stratford-Upon-Avon',
        'slug' => 'stratford-upon-avon',
        'lat' => '52.197000',
        'lng' => '-1.715000',
      ),
      220 =>
      array (
        '_id' => 'stroud',
        'name' => 'Stroud',
        'slug' => 'stroud',
        'lat' => '51.111000',
        'lng' => '-0.678000',
      ),
      221 =>
      array (
        '_id' => 'sudbury',
        'name' => 'Sudbury',
        'slug' => 'sudbury',
        'lat' => '52.040000',
        'lng' => '0.734000',
      ),
      222 =>
      array (
        '_id' => 'sunderland',
        'name' => 'Sunderland',
        'slug' => 'sunderland',
        'lat' => '54.911000',
        'lng' => '-1.384000',
      ),
      223 =>
      array (
        '_id' => 'sutton',
        'name' => 'Sutton',
        'slug' => 'sutton',
        'lat' => '51.365000',
        'lng' => '-0.197000',
      ),
      224 =>
      array (
        '_id' => 'swindon',
        'name' => 'Swindon',
        'slug' => 'swindon',
        'lat' => '51.568000',
        'lng' => '-1.762000',
      ),
      225 =>
      array (
        '_id' => 'taunton',
        'name' => 'Taunton',
        'slug' => 'taunton',
        'lat' => '51.014000',
        'lng' => '-3.091000',
      ),
      226 =>
      array (
        '_id' => 'teeside',
        'name' => 'Teeside',
        'slug' => 'teeside',
        'lat' => '54.783300',
        'lng' => '-1.233300',
      ),
      227 =>
      array (
        '_id' => 'telford',
        'name' => 'Telford',
        'slug' => 'telford',
        'lat' => '52.682000',
        'lng' => '-2.451000',
      ),
      228 =>
      array (
        '_id' => 'truro',
        'name' => 'Truro',
        'slug' => 'truro',
        'lat' => '50.260000',
        'lng' => '-5.052000',
      ),
      229 =>
      array (
        '_id' => 'virginia-water',
        'name' => 'Virginia Water',
        'slug' => 'virginia-water',
        'lat' => '51.397000',
        'lng' => '-0.570000',
      ),
      230 =>
      array (
        '_id' => 'waddington',
        'name' => 'Waddington',
        'slug' => 'waddington',
        'lat' => '53.887000',
        'lng' => '-2.418000',
      ),
      231 =>
      array (
        '_id' => 'wakefield',
        'name' => 'Wakefield',
        'slug' => 'wakefield',
        'lat' => '53.680000',
        'lng' => '-1.493000',
      ),
      232 =>
      array (
        '_id' => 'wallingford',
        'name' => 'Wallingford',
        'slug' => 'wallingford',
        'lat' => '51.601000',
        'lng' => '-1.126000',
      ),
      233 =>
      array (
        '_id' => 'wareham',
        'name' => 'Wareham',
        'slug' => 'wareham',
        'lat' => '50.687000',
        'lng' => '-2.106000',
      ),
      234 =>
      array (
        '_id' => 'warrington',
        'name' => 'Warrington',
        'slug' => 'warrington',
        'lat' => '52.181000',
        'lng' => '-0.691000',
      ),
      235 =>
      array (
        '_id' => 'warwick',
        'name' => 'Warwick',
        'slug' => 'warwick',
        'lat' => '52.287000',
        'lng' => '-1.582000',
      ),
      236 =>
      array (
        '_id' => 'watford',
        'name' => 'Watford',
        'slug' => 'watford',
        'lat' => '51.665000',
        'lng' => '-0.402000',
      ),
      237 =>
      array (
        '_id' => 'wellingborough',
        'name' => 'Wellingborough',
        'slug' => 'wellingborough',
        'lat' => '52.298000',
        'lng' => '-0.687000',
      ),
      238 =>
      array (
        '_id' => 'wellington',
        'name' => 'Wellington',
        'slug' => 'wellington',
        'lat' => '50.977000',
        'lng' => '-3.218000',
      ),
      239 =>
      array (
        '_id' => 'wells',
        'name' => 'Wells',
        'slug' => 'wells',
        'lat' => '51.206000',
        'lng' => '-2.651000',
      ),
      240 =>
      array (
        '_id' => 'welwyn-garden-city',
        'name' => 'Welwyn Garden City',
        'slug' => 'welwyn-garden-city',
        'lat' => '51.806000',
        'lng' => '-0.194000',
      ),
      241 =>
      array (
        '_id' => 'west-bromwich',
        'name' => 'West Bromwich',
        'slug' => 'west-bromwich',
        'lat' => '52.517400',
        'lng' => '-1.996330',
      ),
      242 =>
      array (
        '_id' => 'weston-under-lizard',
        'name' => 'Weston Under Lizard',
        'slug' => 'weston-under-lizard',
        'lat' => '52.691000',
        'lng' => '-2.289000',
      ),
      243 =>
      array (
        '_id' => 'wetherby',
        'name' => 'Wetherby',
        'slug' => 'wetherby',
        'lat' => '53.931000',
        'lng' => '-1.383000',
      ),
      244 =>
      array (
        '_id' => 'weymouth',
        'name' => 'Weymouth',
        'slug' => 'weymouth',
        'lat' => '50.614000',
        'lng' => '-2.459000',
      ),
      245 =>
      array (
        '_id' => 'whitby',
        'name' => 'Whitby',
        'slug' => 'whitby',
        'lat' => '54.482000',
        'lng' => '-0.618000',
      ),
      246 =>
      array (
        '_id' => 'whitehaven',
        'name' => 'Whitehaven',
        'slug' => 'whitehaven',
        'lat' => '54.551000',
        'lng' => '-3.585000',
      ),
      247 =>
      array (
        '_id' => 'wilmslow',
        'name' => 'Wilmslow',
        'slug' => 'wilmslow',
        'lat' => '53.321000',
        'lng' => '-2.233000',
      ),
      248 =>
      array (
        '_id' => 'wimbledon',
        'name' => 'Wimbledon',
        'slug' => 'wimbledon',
        'lat' => '51.428000',
        'lng' => '-0.209000',
      ),
      249 =>
      array (
        '_id' => 'wimborne-minster',
        'name' => 'Wimborne Minster',
        'slug' => 'wimborne-minster',
        'lat' => '50.803000',
        'lng' => '-1.979000',
      ),
      250 =>
      array (
        '_id' => 'winchester',
        'name' => 'Winchester',
        'slug' => 'winchester',
        'lat' => '51.062000',
        'lng' => '-1.308000',
      ),
      251 =>
      array (
        '_id' => 'windsor',
        'name' => 'Windsor',
        'slug' => 'windsor',
        'lat' => '51.479000',
        'lng' => '-0.610000',
      ),
      252 =>
      array (
        '_id' => 'winsford',
        'name' => 'Winsford',
        'slug' => 'winsford',
        'lat' => '53.194000',
        'lng' => '-2.516000',
      ),
      253 =>
      array (
        '_id' => 'wisbech',
        'name' => 'Wisbech',
        'slug' => 'wisbech',
        'lat' => '52.663000',
        'lng' => '0.166000',
      ),
      254 =>
      array (
        '_id' => 'wisborough-green',
        'name' => 'Wisborough Green',
        'slug' => 'wisborough-green',
        'lat' => '51.028000',
        'lng' => '-0.510000',
      ),
      255 =>
      array (
        '_id' => 'woking',
        'name' => 'Woking',
        'slug' => 'woking',
        'lat' => '51.316000',
        'lng' => '-0.558000',
      ),
      256 =>
      array (
        '_id' => 'wokingham',
        'name' => 'Wokingham',
        'slug' => 'wokingham',
        'lat' => '51.409000',
        'lng' => '-0.842000',
      ),
      257 =>
      array (
        '_id' => 'wolverhampton',
        'name' => 'Wolverhampton',
        'slug' => 'wolverhampton',
        'lat' => '52.584000',
        'lng' => '-2.125000',
      ),
      258 =>
      array (
        '_id' => 'woodford',
        'name' => 'Woodford',
        'slug' => 'woodford',
        'lat' => '50.893000',
        'lng' => '-4.538000',
      ),
      259 =>
      array (
        '_id' => 'woolavington',
        'name' => 'Woolavington',
        'slug' => 'woolavington',
        'lat' => '51.168000',
        'lng' => '-2.937000',
      ),
      260 =>
      array (
        '_id' => 'worcester',
        'name' => 'Worcester',
        'slug' => 'worcester',
        'lat' => '52.197000',
        'lng' => '-2.212000',
      ),
      261 =>
      array (
        '_id' => 'worthing',
        'name' => 'Worthing',
        'slug' => 'worthing',
        'lat' => '50.819000',
        'lng' => '-0.389000',
      ),
      262 =>
      array (
        '_id' => 'yarm',
        'name' => 'Yarm',
        'slug' => 'yarm',
        'lat' => '54.506000',
        'lng' => '-1.359000',
      ),
      263 =>
      array (
        '_id' => 'yeovil',
        'name' => 'Yeovil',
        'slug' => 'yeovil',
        'lat' => '50.946000',
        'lng' => '-2.634000',
      ),
      264 =>
      array (
        '_id' => 'york',
        'name' => 'York',
        'slug' => 'york',
        'lat' => '53.956000',
        'lng' => '-1.093000',
      ),
    ),
  ),
  1 =>
  array (
    '_id' => 'northern-ireland',
    'name' => 'Northern Ireland',
    'slug' => 'northern-ireland',
    'cities' =>
    array (
      0 =>
      array (
        '_id' => 'armagh',
        'name' => 'Armagh',
        'slug' => 'armagh',
        'lat' => '54.350000',
        'lng' => '-6.667000',
      ),
      1 =>
      array (
        '_id' => 'ballymena',
        'name' => 'Ballymena',
        'slug' => 'ballymena',
        'lat' => '54.867000',
        'lng' => '-6.267000',
      ),
      2 =>
      array (
        '_id' => 'belfast',
        'name' => 'Belfast',
        'slug' => 'belfast',
        'lat' => '54.583000',
        'lng' => '-5.933000',
      ),
      3 =>
      array (
        '_id' => 'carrickfergus',
        'name' => 'Carrickfergus',
        'slug' => 'carrickfergus',
        'lat' => '54.717000',
        'lng' => '-5.733000',
      ),
      4 =>
      array (
        '_id' => 'derry',
        'name' => 'Derry',
        'slug' => 'derry',
        'lat' => '54.993100',
        'lng' => '-7.311690',
      ),
      5 =>
      array (
        '_id' => 'loughgall',
        'name' => 'Loughgall',
        'slug' => 'loughgall',
        'lat' => '54.417000',
        'lng' => '-6.600000',
      ),
      6 =>
      array (
        '_id' => 'omagh',
        'name' => 'Omagh',
        'slug' => 'omagh',
        'lat' => '54.598900',
        'lng' => '-7.303090',
      ),
      7 =>
      array (
        '_id' => 'portstewart',
        'name' => 'Portstewart',
        'slug' => 'portstewart',
        'lat' => '55.167000',
        'lng' => '-6.700000',
      ),
      8 =>
      array (
        '_id' => 'stanmore',
        'name' => 'Stanmore',
        'slug' => 'stanmore',
        'lat' => '51.512000',
        'lng' => '-1.315000',
      ),
      9 =>
      array (
        '_id' => 'whitehead',
        'name' => 'Whitehead',
        'slug' => 'whitehead',
        'lat' => '54.757100',
        'lng' => '-5.712250',
      ),
    ),
  ),
  2 =>
  array (
    '_id' => 'scotland',
    'name' => 'Scotland',
    'slug' => 'scotland',
    'cities' =>
    array (
      0 =>
      array (
        '_id' => 'aberdeen',
        'name' => 'Aberdeen',
        'slug' => 'aberdeen',
        'lat' => '57.150000',
        'lng' => '-2.124000',
      ),
      1 =>
      array (
        '_id' => 'aviemore',
        'name' => 'Aviemore',
        'slug' => 'aviemore',
        'lat' => '57.190000',
        'lng' => '-3.829000',
      ),
      2 =>
      array (
        '_id' => 'braemar',
        'name' => 'Braemar',
        'slug' => 'braemar',
        'lat' => '57.007000',
        'lng' => '-3.408000',
      ),
      3 =>
      array (
        '_id' => 'cladich',
        'name' => 'Cladich',
        'slug' => 'cladich',
        'lat' => '56.348000',
        'lng' => '-5.083000',
      ),
      4 =>
      array (
        '_id' => 'cumbernauld',
        'name' => 'Cumbernauld',
        'slug' => 'cumbernauld',
        'lat' => '55.948000',
        'lng' => '-3.978000',
      ),
      5 =>
      array (
        '_id' => 'dumbarton',
        'name' => 'Dumbarton',
        'slug' => 'dumbarton',
        'lat' => '55.946000',
        'lng' => '-4.554000',
      ),
      6 =>
      array (
        '_id' => 'dumfries',
        'name' => 'Dumfries',
        'slug' => 'dumfries',
        'lat' => '55.072000',
        'lng' => '-3.605000',
      ),
      7 =>
      array (
        '_id' => 'dunbar',
        'name' => 'Dunbar',
        'slug' => 'dunbar',
        'lat' => '55.998000',
        'lng' => '-2.521000',
      ),
      8 =>
      array (
        '_id' => 'dunblane',
        'name' => 'Dunblane',
        'slug' => 'dunblane',
        'lat' => '56.191000',
        'lng' => '-3.958000',
      ),
      9 =>
      array (
        '_id' => 'dundee',
        'name' => 'Dundee',
        'slug' => 'dundee',
        'lat' => '56.480000',
        'lng' => '-3.031000',
      ),
      10 =>
      array (
        '_id' => 'dunfermline',
        'name' => 'Dunfermline',
        'slug' => 'dunfermline',
        'lat' => '56.072000',
        'lng' => '-3.438000',
      ),
      11 =>
      array (
        '_id' => 'edinburgh',
        'name' => 'Edinburgh',
        'slug' => 'edinburgh',
        'lat' => '55.949000',
        'lng' => '-3.161000',
      ),
      12 =>
      array (
        '_id' => 'elgin',
        'name' => 'Elgin',
        'slug' => 'elgin',
        'lat' => '57.646000',
        'lng' => '-3.315000',
      ),
      13 =>
      array (
        '_id' => 'falkirk',
        'name' => 'Falkirk',
        'slug' => 'falkirk',
        'lat' => '56.005000',
        'lng' => '-3.788000',
      ),
      14 =>
      array (
        '_id' => 'forres',
        'name' => 'Forres',
        'slug' => 'forres',
        'lat' => '57.606000',
        'lng' => '-3.615000',
      ),
      15 =>
      array (
        '_id' => 'glasgow',
        'name' => 'Glasgow',
        'slug' => 'glasgow',
        'lat' => '55.862000',
        'lng' => '-4.245000',
      ),
      16 =>
      array (
        '_id' => 'grangemouth',
        'name' => 'Grangemouth',
        'slug' => 'grangemouth',
        'lat' => '56.015000',
        'lng' => '-3.709000',
      ),
      17 =>
      array (
        '_id' => 'greenock',
        'name' => 'Greenock',
        'slug' => 'greenock',
        'lat' => '55.951000',
        'lng' => '-4.763000',
      ),
      18 =>
      array (
        '_id' => 'hamilton',
        'name' => 'Hamilton',
        'slug' => 'hamilton',
        'lat' => '55.776000',
        'lng' => '-4.033000',
      ),
      19 =>
      array (
        '_id' => 'hawick',
        'name' => 'Hawick',
        'slug' => 'hawick',
        'lat' => '55.431000',
        'lng' => '-2.782000',
      ),
      20 =>
      array (
        '_id' => 'inverkeithing',
        'name' => 'Inverkeithing',
        'slug' => 'inverkeithing',
        'lat' => '56.028000',
        'lng' => '-3.388000',
      ),
      21 =>
      array (
        '_id' => 'inverness',
        'name' => 'Inverness',
        'slug' => 'inverness',
        'lat' => '57.480000',
        'lng' => '-4.227000',
      ),
      22 =>
      array (
        '_id' => 'kelso',
        'name' => 'Kelso',
        'slug' => 'kelso',
        'lat' => '55.603000',
        'lng' => '-2.437000',
      ),
      23 =>
      array (
        '_id' => 'kennet',
        'name' => 'Kennet',
        'slug' => 'kennet',
        'lat' => '56.104000',
        'lng' => '-3.729000',
      ),
      24 =>
      array (
        '_id' => 'kilmarnock',
        'name' => 'Kilmarnock',
        'slug' => 'kilmarnock',
        'lat' => '55.606000',
        'lng' => '-4.500000',
      ),
      25 =>
      array (
        '_id' => 'kirkwall',
        'name' => 'Kirkwall',
        'slug' => 'kirkwall',
        'lat' => '58.979000',
        'lng' => '-2.948000',
      ),
      26 =>
      array (
        '_id' => 'lerwick',
        'name' => 'Lerwick',
        'slug' => 'lerwick',
        'lat' => '60.156000',
        'lng' => '-1.144000',
      ),
      27 =>
      array (
        '_id' => 'loch-ness',
        'name' => 'Loch Ness',
        'slug' => 'loch-ness',
        'lat' => '57.647000',
        'lng' => '-3.198000',
      ),
      28 =>
      array (
        '_id' => 'montrose',
        'name' => 'Montrose',
        'slug' => 'montrose',
        'lat' => '56.708000',
        'lng' => '-2.466000',
      ),
      29 =>
      array (
        '_id' => 'motherwell',
        'name' => 'Motherwell',
        'slug' => 'motherwell',
        'lat' => '55.786000',
        'lng' => '-3.986000',
      ),
      30 =>
      array (
        '_id' => 'newark',
        'name' => 'Newark',
        'slug' => 'newark',
        'lat' => '59.269000',
        'lng' => '-2.482000',
      ),
      31 =>
      array (
        '_id' => 'oban',
        'name' => 'Oban',
        'slug' => 'oban',
        'lat' => '56.418000',
        'lng' => '-5.462000',
      ),
      32 =>
      array (
        '_id' => 'perth',
        'name' => 'Perth',
        'slug' => 'perth',
        'lat' => '56.396000',
        'lng' => '-3.434000',
      ),
      33 =>
      array (
        '_id' => 'plains',
        'name' => 'Plains',
        'slug' => 'plains',
        'lat' => '55.877000',
        'lng' => '-3.926000',
      ),
      34 =>
      array (
        '_id' => 'prestwick',
        'name' => 'Prestwick',
        'slug' => 'prestwick',
        'lat' => '55.495000',
        'lng' => '-4.620000',
      ),
      35 =>
      array (
        '_id' => 'st-andrews',
        'name' => 'St Andrews',
        'slug' => 'st-andrews',
        'lat' => '56.338000',
        'lng' => '-2.785000',
      ),
      36 =>
      array (
        '_id' => 'stirling',
        'name' => 'Stirling',
        'slug' => 'stirling',
        'lat' => '56.119000',
        'lng' => '-3.938000',
      ),
      37 =>
      array (
        '_id' => 'stranraer',
        'name' => 'Stranraer',
        'slug' => 'stranraer',
        'lat' => '54.902700',
        'lng' => '-5.022020',
      ),
      38 =>
      array (
        '_id' => 'wick',
        'name' => 'Wick',
        'slug' => 'wick',
        'lat' => '58.439000',
        'lng' => '-3.088000',
      ),
    ),
  ),
  3 =>
  array (
    '_id' => 'wales',
    'name' => 'Wales',
    'slug' => 'wales',
    'cities' =>
    array (
      0 =>
      array (
        '_id' => 'aberystwyth',
        'name' => 'Aberystwyth',
        'slug' => 'aberystwyth',
        'lat' => '52.413000',
        'lng' => '-4.081000',
      ),
      1 =>
      array (
        '_id' => 'bangor',
        'name' => 'Bangor',
        'slug' => 'bangor',
        'lat' => '53.221000',
        'lng' => '-4.135000',
      ),
      2 =>
      array (
        '_id' => 'beddgelert',
        'name' => 'Beddgelert',
        'slug' => 'beddgelert',
        'lat' => '53.015000',
        'lng' => '-4.095000',
      ),
      3 =>
      array (
        '_id' => 'betws-y-coed',
        'name' => 'Betws-y-Coed',
        'slug' => 'betws-y-coed',
        'lat' => '53.092000',
        'lng' => '-3.800000',
      ),
      4 =>
      array (
        '_id' => 'brecon',
        'name' => 'Brecon',
        'slug' => 'brecon',
        'lat' => '51.952200',
        'lng' => '-3.384200',
      ),
      5 =>
      array (
        '_id' => 'cardiff',
        'name' => 'Cardiff',
        'slug' => 'cardiff',
        'lat' => '51.481000',
        'lng' => '-3.174000',
      ),
      6 =>
      array (
        '_id' => 'haverfordwest',
        'name' => 'Haverfordwest',
        'slug' => 'haverfordwest',
        'lat' => '51.800000',
        'lng' => '-4.966000',
      ),
      7 =>
      array (
        '_id' => 'hawarden',
        'name' => 'Hawarden',
        'slug' => 'hawarden',
        'lat' => '53.182000',
        'lng' => '-3.025000',
      ),
      8 =>
      array (
        '_id' => 'holyhead',
        'name' => 'Holyhead',
        'slug' => 'holyhead',
        'lat' => '53.310000',
        'lng' => '-4.635000',
      ),
      9 =>
      array (
        '_id' => 'lampeter',
        'name' => 'Lampeter',
        'slug' => 'lampeter',
        'lat' => '52.116000',
        'lng' => '-4.081000',
      ),
      10 =>
      array (
        '_id' => 'llandrindod-well',
        'name' => 'Llandrindod Well',
        'slug' => 'llandrindod-well',
        'lat' => '52.243000',
        'lng' => '-3.384000',
      ),
      11 =>
      array (
        '_id' => 'machynlleth',
        'name' => 'Machynlleth',
        'slug' => 'machynlleth',
        'lat' => '52.587000',
        'lng' => '-3.853000',
      ),
      12 =>
      array (
        '_id' => 'milford',
        'name' => 'Milford',
        'slug' => 'milford',
        'lat' => '52.505000',
        'lng' => '-3.333000',
      ),
      13 =>
      array (
        '_id' => 'mold',
        'name' => 'Mold',
        'slug' => 'mold',
        'lat' => '53.163000',
        'lng' => '-3.144000',
      ),
      14 =>
      array (
        '_id' => 'newcastle',
        'name' => 'Newcastle',
        'slug' => 'newcastle',
        'lat' => '51.853000',
        'lng' => '-2.806000',
      ),
      15 =>
      array (
        '_id' => 'newport',
        'name' => 'Newport',
        'slug' => 'newport',
        'lat' => '51.591000',
        'lng' => '-2.989000',
      ),
      16 =>
      array (
        '_id' => 'pontypridd',
        'name' => 'Pontypridd',
        'slug' => 'pontypridd',
        'lat' => '51.596000',
        'lng' => '-3.336000',
      ),
      17 =>
      array (
        '_id' => 'st-asaph',
        'name' => 'St Asaph',
        'slug' => 'st-asaph',
        'lat' => '53.258000',
        'lng' => '-3.447000',
      ),
      18 =>
      array (
        '_id' => 'swansea',
        'name' => 'Swansea',
        'slug' => 'swansea',
        'lat' => '51.633000',
        'lng' => '-3.958000',
      ),
      19 =>
      array (
        '_id' => 'wrexham',
        'name' => 'Wrexham',
        'slug' => 'wrexham',
        'lat' => '53.047000',
        'lng' => '-2.992000',
      ),
    ),
  ),
);



// echo json_encode($regions); exit;

		// now insert

		foreach ($regions as $region) {
			$collection->insert($region);
		}
	}

}
