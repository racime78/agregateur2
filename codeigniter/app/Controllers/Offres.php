<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offres extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Charger le modèle Offre_model
        $this->load->model('offre_model');
    }

    public function index() {
        $this->load->model('offre_model');
        $data['offres'] = $this->offre_model->getOffres();
        $this->load->view('gestion_offre', $data);
    }

    public function ajouter()
    {
        $this->load->view('ajouter_offre');
    }

    public function inserer()
    {
        // Récupérer les données du formulaire
        $data = array(
            'Entreprise' => $this->input->post('entreprise'),
            'LogoUrl' => $this->input->post('logourl'),
            'Titre' => $this->input->post('titre'),
            'Date_Offre' => $this->input->post('dateoffre'),
            'Contrat' => $this->input->post('contrat'),
            'Lien' => $this->input->post('urloffre'),
            'Ville' => $this->input->post('ville'),
            'Description_offre' => $this->input->post('description_offre')
        );

        // Insérer l'offre dans la base de données en utilisant le modèle
        if ($this->offre_model->inserer_offre($data)) {
            echo "Nouvelle offre ajoutée avec succès !";
        } else {
            echo "Erreur lors de l'ajout de l'offre.";
        }
    }

    public function modifier()
    {
        // Vérifier si l'ID de l'offre est fourni dans l'URL
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            // Charger le modèle Offre_model
            $this->load->model('offre_model');

            $offre_id = $_GET['id'];
            
            // Récupérer les détails de l'offre d'emploi en utilisant le modèle
            $data['offre'] = $this->offre_model->recuperer_offre($offre_id);

            // Charger la vue pour modifier l'offre d'emploi avec les données récupérées
            $this->load->view('modifier_offre', $data);
        } else {
            echo "ID de l'offre d'emploi non fourni.";
        }
    }

    public function modifier_processus()
    {
        // Vérifier si le formulaire a été soumis
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Récupérer les données du formulaire
            $offre_id = $this->input->post('offre_id');
            $entreprise = $this->input->post('entreprise');
            $titre = $this->input->post('titre');
            $contrat = $this->input->post('contrat');
            $ville = $this->input->post('ville');
            $description_offre = $this->input->post('description_offre');

            // Préparer les données à mettre à jour
            $data = array(
                'Entreprise' => $entreprise,
                'Titre' => $titre,
                'Contrat' => $contrat,
                'Ville' => $ville,
                'Description_offre' => $description_offre
            );

            // Mettre à jour l'offre dans la base de données en utilisant le modèle
            if ($this->offre_model->modifier_offre($offre_id, $data)) {
                // Redirection vers une page de confirmation ou une autre page
                redirect('gestion-offre.php');
            } else {
                echo "Erreur lors de la mise à jour de l'offre.";
            }
        } else {
            echo "Ce script ne peut être accédé que via une méthode POST.";
        }
    }

    public function supprimer_offre($offre_id) {
        // Vérifier si l'ID de l'offre est fourni
        if (!empty($offre_id)) {
            // Supprimer l'offre d'emploi de la base de données
            if ($this->Offre_model->supprimer_offre($offre_id)) {
                echo "L'offre d'emploi a été supprimée avec succès.";
            } else {
                echo "Erreur lors de la suppression de l'offre d'emploi.";
            }
        } else {
            echo "ID de l'offre d'emploi non fourni.";
        }
    }
}
