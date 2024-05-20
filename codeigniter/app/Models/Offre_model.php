// application/models/Offre_model.php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offre_model extends CI_Model {

    public function inserer_offre($data)
    {
        // Insérer une nouvelle offre dans la base de données
        return $this->db->insert('offre', $data);
    }

    public function recuperer_offre($offre_id)
    {
        // Récupérer les détails de l'offre d'emploi depuis la base de données
        $query = $this->db->get_where('offre', array('ID_O' => $offre_id));
        return $query->row_array();
    }

    public function modifier_offre($offre_id, $data)
    {
        // Mettre à jour l'offre dans la base de données
        $this->db->where('ID_O', $offre_id);
        return $this->db->update('offre', $data);
    }
}
