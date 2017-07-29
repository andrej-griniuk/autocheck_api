<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cars Controller
 *
 * @property \App\Model\Table\CarsTable $Cars
 *
 * @method \App\Model\Entity\Car[] paginate($object = null, array $settings = [])
 */
class CarsController extends AppController
{

    protected $_testDataset = [
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '2.4',
            'popularity_score' => 65,
            'registrations_count' => 77055,
            'star_rating' => '***',
            'estimated_value' => '$16,400',
            'plate_number' => '',
            'is_rego_expired' => 0,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '1.3',
            'popularity_score' => 24,
            'registrations_count' => 77055,
            'star_rating' => '*****',
            'estimated_value' => '54,850',
            'plate_number' => '',
            'is_rego_expired' => 0,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '3.9',
            'popularity_score' => 33,
            'registrations_count' => 77055,
            'star_rating' => '**',
            'estimated_value' => '$15,300',
            'plate_number' => '',
            'is_rego_expired' => 0,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
        /* ################################################## */
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 1,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '1.1',
            'popularity_score' => 40,
            'registrations_count' => 77055,
            'star_rating' => '****',
            'estimated_value' => '$16,400',
            'plate_number' => 'FC12345',
            'is_rego_expired' => 0,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '2.4',
            'popularity_score' => 25,
            'registrations_count' => 77055,
            'star_rating' => '**',
            'estimated_value' => '$34,300',
            'plate_number' => 'FC12345',
            'is_rego_expired' => 1,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 1,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '1.4',
            'popularity_score' => 35,
            'registrations_count' => 77055,
            'star_rating' => '***',
            'estimated_value' => '$20,500',
            'plate_number' => 'FC12345',
            'is_rego_expired' => 0,
            'is_stolen' => 1,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '2.5',
            'popularity_score' => 87,
            'registrations_count' => 77055,
            'star_rating' => '****',
            'estimated_value' => '$17,000',
            'plate_number' => 'FC12345',
            'is_rego_expired' => 0,
            'is_stolen' => 1,
            'is_damaged' => 1,
            'is_rolled_back' => 0,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '1.8',
            'popularity_score' => 19,
            'registrations_count' => 77055,
            'star_rating' => '*****',
            'estimated_value' => '$9,800',
            'plate_number' => 'FC12345',
            'is_rego_expired' => 0,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '3.4',
            'popularity_score' => 45,
            'registrations_count' => 77055,
            'star_rating' => '***',
            'estimated_value' => '$18,400',
            'plate_number' => 'FC12345',
            'is_rego_expired' => 0,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
        [
            'ppsr_created' => '2017-01',
            'identifier_type' => 'VIN',
            'color' => 'GREY',
            'compliance_date' => '2008-01',
            'is_encumbered' => 0,
            'make' => 'FORD',
            'model' => 'FALCON',
            'market_segment' => 'Large passenger',
            'thefts_count' => 280,
            'thefts_factor' => '2.9',
            'popularity_score' => 70,
            'registrations_count' => 77055,
            'star_rating' => '**',
            'estimated_value' => '$13,900',
            'plate_number' => 'FC12345',
            'is_rego_expired' => 0,
            'is_stolen' => 0,
            'is_damaged' => 0,
            'is_rolled_back' => 0,
        ],
    ];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        // TODO: uncomment for production
        /*
        $make = $this->request->getQuery('make');
        $model = $this->request->getQuery('model');
        $ppsr_created = $this->request->getQuery('ppsr_created');
        $plate_number = $this->request->getQuery('plate_number');

        if (!$plate_number || !($data = $this->Cars->findByPlateNumber($plate_number))) {
            $data = $this->Cars->find()->where(compact('make', 'model', 'ppsr_created'))->first();
        }
        */

        // For testing purposes
        shuffle($this->_testDataset);
        $data = reset($this->_testDataset);

        $this->set(compact('data'));
        $this->set('_serialize', ['data']);
    }
}
