<?php

use Illuminate\Database\Seeder;

class BoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
	    $years = array(-700, 1306, 1479, 2017);
	    $bounds = array(
	    	"[ [ [ 108.7512 , 21.68303 ], [ 108.6369 , 21.84944 ], [ 108.32707 , 22.02426 ], [ 108.0513 , 21.862 ], [ 107.75411 , 21.84965 ], [ 107.5451 , 21.74911 ], [ 107.30875 , 21.71413 ], [ 107.02579 , 21.77573 ], [ 106.90627 , 21.90593 ], [ 106.67623 , 22.07284 ], [ 106.62163 , 22.29859 ], [ 106.37452 , 22.65185 ], [ 106.12742 , 22.95364 ], [ 105.7292 , 22.90203 ], [ 105.4848 , 23.21437 ], [ 105.33378 , 22.8519 ], [ 105.14841 , 22.62214 ], [ 105.08868 , 22.30907 ], [ 104.63034 , 22.43434 ], [ 104.21597 , 22.16325 ], [ 104.74036 , 21.68564 ], [ 104.98059 , 21.33114 ], [ 104.90332 , 21.07974 ], [ 105.21057 , 21.03313 ], [ 105.38049 , 20.85311 ], [ 105.30615 , 20.55227 ], [ 105.59857 , 20.28575 ], [ 105.52336 , 20.03659 ], [ 105.43716 , 19.79996 ], [ 105.29054 , 19.47755 ], [ 104.98652 , 19.15013 ], [ 105.33987 , 18.72106 ], [ 105.63191 , 18.24024 ], [ 106.0471 , 17.79808 ], [ 106.45518 , 17.29583 ], [ 106.69886 , 17.39972 ], [ 106.42499 , 17.74166 ], [ 106.50992 , 17.95611 ], [ 105.88361 , 18.49916 ], [ 105.61387 , 18.97722 ], [ 105.95679 , 19.92304 ], [ 106.52763 , 20.24014 ], [ 106.59721 , 20.63259 ], [ 106.77693 , 20.69916 ], [ 106.64665 , 21.02166 ], [ 106.86263 , 20.87118 ], [ 107.14651 , 21.03615 ], [ 107.15443 , 20.925 ], [ 107.37067 , 21.02569 ], [ 107.41651 , 21.32596 ], [ 107.99002 , 21.54241 ] ] ]",
	    	"[ [ [ 108.52049, 21.66261 ], [ 108.47211, 21.85454 ], [ 108.32707, 22.02426 ], [ 108.08426, 21.7651 ], [ 107.75411, 21.84965 ], [ 107.5451, 21.74911 ], [ 107.36368, 21.73454 ], [ 107.14114, 21.79613 ], [ 106.99416, 21.89574 ], [ 106.94539, 22.00155 ], [ 106.77544, 22.19182 ], [ 106.73978, 22.35854 ], [ 106.89088, 22.52506 ], [ 106.91294, 22.76129 ], [ 106.52846, 22.95768 ], [ 106.28131, 22.96171 ], [ 105.94352, 23.03401 ], [ 105.54941, 23.40076 ], [ 105.08009, 23.31081 ], [ 104.80149, 23.10422 ], [ 104.8305, 22.92768 ], [ 104.51344, 22.80282 ], [ 104.10849, 22.79943 ], [ 104.0049, 22.50434 ], [ 103.87757, 22.61921 ], [ 103.76672, 22.78971 ], [ 103.4791, 22.82409 ], [ 103.32058, 22.74453 ], [ 103.38428, 22.53402 ], [ 103.48644, 22.41971 ], [ 103.465, 22.28497 ], [ 103.48202, 22.16791 ], [ 103.4512, 22.03514 ], [ 103.52689, 21.82535 ], [ 103.62455, 21.69822 ], [ 103.70024, 21.70883 ], [ 103.9055, 21.54067 ], [ 104.18555, 21.44042 ], [ 104.21814, 21.29544 ], [ 104.36609, 21.20154 ], [ 104.58097, 21.04688 ], [ 104.78796, 21.0336 ], [ 104.97436, 20.92029 ], [ 105.14172, 20.75321 ], [ 105.2102, 20.63736 ], [ 105.27868, 20.64483 ], [ 105.27997, 20.41451 ], [ 105.22673, 20.22742 ], [ 105.06362, 20.0014 ], [ 105.05623, 19.72159 ], [ 104.8401, 19.50862 ], [ 104.73383, 19.01516 ], [ 105.05423, 18.77308 ], [ 105.12334, 18.38962 ], [ 105.42317, 18.25589 ], [ 105.75596, 17.74577 ], [ 106.0424, 17.40042 ], [ 106.35081, 17.23288 ], [ 106.55796, 16.91907 ], [ 106.6882, 16.61527 ], [ 107.21275, 16.41073 ], [ 107.47363, 16.016 ], [ 107.73725, 15.86633 ], [ 107.7592, 15.67248 ], [ 107.9734, 15.55256 ], [ 108.1869, 15.59509 ], [ 108.41138, 15.74339 ], [ 108.19293, 16.08453 ], [ 107.819, 16.34462 ], [ 107.45565, 16.68494 ], [ 107.19039, 16.8913 ], [ 107.03021, 17.12743 ], [ 106.69886, 17.39972 ], [ 106.42499, 17.74166 ], [ 106.50992, 17.95611 ], [ 105.88361, 18.49916 ], [ 105.61387, 18.97722 ], [ 105.95679, 19.92304 ], [ 106.52763, 20.24014 ], [ 106.59721, 20.63259 ], [ 106.77693, 20.69916 ], [ 106.64665, 21.02166 ], [ 106.86263, 20.87118 ], [ 107.14651, 21.03615 ], [ 107.15443, 20.925 ], [ 107.37067, 21.02569 ], [ 107.41651, 21.32596 ], [ 107.99002, 21.54241 ] ] ]",
	    	"[ [ [ 108.52049, 21.66261 ], [ 108.47211, 21.85454 ], [ 108.32707, 22.02426 ], [ 108.08426, 21.7651 ], [ 107.75411, 21.84965 ], [ 107.5451, 21.74911 ], [ 107.36368, 21.73454 ], [ 107.14114, 21.79613 ], [ 106.99416, 21.89574 ], [ 106.94539, 22.00155 ], [ 106.77544, 22.19182 ], [ 106.73978, 22.35854 ], [ 106.89088, 22.52506 ], [ 106.91294, 22.76129 ], [ 106.52846, 22.95768 ], [ 106.28131, 22.96171 ], [ 105.94352, 23.03401 ], [ 105.54941, 23.40076 ], [ 105.08009, 23.31081 ], [ 104.80149, 23.10422 ], [ 104.8305, 22.92768 ], [ 104.51344, 22.80282 ], [ 104.10849, 22.79943 ], [ 104.0049, 22.50434 ], [ 103.87757, 22.61921 ], [ 103.76672, 22.78971 ], [ 103.4791, 22.82409 ], [ 103.32058, 22.74453 ], [ 103.38428, 22.53402 ], [ 103.48644, 22.41971 ], [ 103.465, 22.28497 ], [ 103.48202, 22.16791 ], [ 103.57754, 21.7293 ], [ 103.48844, 21.47817 ], [ 103.56413, 21.13058 ], [ 103.29924, 20.88997 ], [ 103.39464, 20.48949 ], [ 103.17481, 20.32158 ], [ 102.6471, 20.17552 ], [ 102.23474, 19.79174 ], [ 101.94667, 19.08679 ], [ 102.10905, 18.78495 ], [ 102.59157, 18.877 ], [ 103.04113, 18.84428 ], [ 103.06274, 18.4795 ], [ 103.18615, 18.29943 ], [ 103.63916, 18.5155 ], [ 103.68566, 18.32503 ], [ 103.91767, 18.21668 ], [ 103.97429, 18.0793 ], [ 104.09682, 17.99667 ], [ 104.21028, 17.92268 ], [ 104.29078, 18.08381 ], [ 104.38227, 18.12475 ], [ 104.49393, 18.05384 ], [ 104.54106, 17.94075 ], [ 104.66511, 17.70205 ], [ 104.93199, 17.43159 ], [ 105.03166, 17.22211 ], [ 105.1533, 17.01239 ], [ 105.4813, 16.86651 ], [ 105.93094, 16.7646 ], [ 106.57834, 16.46256 ], [ 106.71152, 16.52883 ], [ 107.08641, 16.3633 ], [ 107.41321, 15.97904 ], [ 107.79218, 15.6866 ], [ 107.73723, 14.98378 ], [ 108.08876, 14.74131 ], [ 108.35616, 14.49283 ], [ 108.4313, 14.08429 ], [ 108.74814, 13.90174 ], [ 109.18583, 13.81509 ], [ 109.18977, 14.22551 ], [ 108.73622, 15.31978 ], [ 108.53223, 15.61646 ], [ 108.19293, 16.08453 ], [ 107.819, 16.34462 ], [ 107.45565, 16.68494 ], [ 107.19039, 16.8913 ], [ 107.03021, 17.12743 ], [ 106.69886, 17.39972 ], [ 106.42499, 17.74166 ], [ 106.50992, 17.95611 ], [ 105.88361, 18.49916 ], [ 105.61387, 18.97722 ], [ 105.95679, 19.92304 ], [ 106.52763, 20.24014 ], [ 106.59721, 20.63259 ], [ 106.77693, 20.69916 ], [ 106.64665, 21.02166 ], [ 106.86263, 20.87118 ], [ 107.14651, 21.03615 ], [ 107.15443, 20.925 ], [ 107.37067, 21.02569 ], [ 107.41651, 21.32596 ], [ 107.99002, 21.54241 ] ] ]",
	    	"[ [ [ 104.445327, 10.422736 ], [ 104.877882, 10.530418 ], [ 105.094145, 10.713191 ], [ 105.1008, 10.9543 ], [ 105.781354, 11.020973 ], [ 106.203309, 10.770554 ], [ 106.1894, 11.053682 ], [ 105.871136, 11.296736 ], [ 105.853145, 11.661945 ], [ 106.043372, 11.776245 ], [ 106.458209, 11.665864 ], [ 106.419545, 11.972636 ], [ 107.549909, 12.3593 ], [ 107.483318, 13.020554 ], [ 107.629245, 13.538036 ], [ 107.344082, 14.1284 ], [ 107.5466, 14.708618 ], [ 107.468036, 15.023191 ], [ 107.695254, 15.270827 ], [ 107.1763, 15.790345 ], [ 107.460818, 16.080482 ], [ 106.9872, 16.299718 ], [ 106.875118, 16.536873 ], [ 106.6847, 16.4593 ], [ 106.5611, 16.996936 ], [ 105.7543, 17.670409 ], [ 105.504436, 18.168327 ], [ 105.183318, 18.334445 ], [ 105.193172, 18.636727 ], [ 103.877682, 19.309509 ], [ 104.103863, 19.478609 ], [ 104.038827, 19.693736 ], [ 104.644227, 19.616664 ], [ 104.977827, 20.003954 ], [ 104.939282, 20.183464 ], [ 104.381509, 20.454582 ], [ 104.641891, 20.652354 ], [ 104.103945, 20.9759 ], [ 103.687054, 20.659582 ], [ 103.177127, 20.843882 ], [ 102.8886, 21.252218 ], [ 102.970545, 21.745136 ], [ 102.675191, 21.658536 ], [ 102.604427, 21.928473 ], [ 102.140745, 22.396282 ], [ 102.474436, 22.771873 ], [ 103.0304, 22.436518 ], [ 103.333672, 22.794509 ], [ 103.522418, 22.584364 ], [ 103.653809, 22.782873 ], [ 103.968663, 22.503873 ], [ 104.1113, 22.798127 ], [ 104.3747, 22.6875 ], [ 104.731927, 22.818054 ], [ 104.907491, 23.180273 ], [ 105.358727, 23.324164 ], [ 105.877063, 22.912527 ], [ 106.7029, 22.866945 ], [ 106.787491, 22.763882 ], [ 106.551709, 22.456818 ], [ 106.693309, 22.030827 ], [ 107.362727, 21.605264 ], [ 107.783054, 21.666936 ], [ 107.990018, 21.542409 ], [ 107.416509, 21.325964 ], [ 107.370672, 21.025691 ], [ 107.154427, 20.925 ], [ 107.146509, 21.036145 ], [ 106.862627, 20.871182 ], [ 106.646654, 21.021664 ], [ 106.776927, 20.699164 ], [ 106.597209, 20.632591 ], [ 106.527627, 20.240136 ], [ 105.956791, 19.923045 ], [ 105.613872, 18.977218 ], [ 105.883609, 18.499164 ], [ 106.509918, 17.956109 ], [ 106.424991, 17.741664 ], [ 106.698863, 17.399718 ], [ 107.811509, 16.312009 ], [ 108.188582, 16.199164 ], [ 108.201163, 15.999436 ], [ 108.330827, 16.150418 ], [ 108.305818, 15.948327 ], [ 108.624982, 15.482218 ], [ 108.829163, 15.421945 ], [ 109.304427, 13.864445 ], [ 109.228863, 13.408609 ], [ 109.464845, 12.900554 ], [ 109.197336, 12.631527 ], [ 109.336382, 12.372636 ], [ 109.147, 12.432082 ], [ 109.269991, 11.8925 ], [ 109.183109, 12.116945 ], [ 109.2211, 11.756109 ], [ 109.021682, 11.362254 ], [ 108.113163, 10.915973 ], [ 107.999691, 10.704236 ], [ 107.266191, 10.376127 ], [ 106.998582, 10.655064 ], [ 106.967145, 10.474618 ], [ 106.763027, 10.680554 ], [ 106.591554, 10.429691 ], [ 106.732463, 10.470482 ], [ 106.784236, 10.279791 ], [ 106.424318, 10.311382 ], [ 106.778027, 10.082364 ], [ 106.603854, 9.974091 ], [ 106.296627, 10.255 ], [ 106.674409, 9.842218 ], [ 106.114809, 10.234064 ], [ 106.570672, 9.741391 ], [ 106.543027, 9.583609 ], [ 106.398454, 9.532364 ], [ 105.823718, 10.004227 ], [ 106.194545, 9.368473 ], [ 105.533872, 9.129445 ], [ 105.1213, 8.625064 ], [ 104.742754, 8.605, ], [ 104.922545, 8.745209 ], [ 104.798936, 8.792218 ], [ 104.834718, 9.533745 ], [ 105.107463, 9.945273 ], [ 104.801491, 10.207427 ], [ 104.610236, 10.168891 ], [ 104.445327, 10.422736 ] ] ]"
	    );
        //
        for($i = 0; $i < 4; $i++){
        	DB::table('bounds')->insert([
	            'year' => $years[$i],
	            'bounds' => $bounds[$i]
	        ]);
        }
    }
}
