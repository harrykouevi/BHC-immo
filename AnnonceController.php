public function destroy($id)
{
    try {
        // Utiliser le service pour supprimer l'annonce
        $this->annonceService->delete($id);

        // Rediriger avec un message de succès
        return redirect()->route('admin.annonces.index')
                         ->with('success', 'Annonce supprimée avec succès.');
    } catch (Exception $e) {
        // Gérer les erreurs et rediriger avec un message d'erreur
        return redirect()->route('admin.annonces.index')
                         ->with('error', 'Erreur lors de la suppression de l\'annonce : ' . $e->getMessage());
    }
}
