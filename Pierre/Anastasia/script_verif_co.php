<script>
    function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
</script>

<script>
    function verifPseudo(champ)
{
   if(champ.value.length < 5)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
</script>

<script>
    function verifPass(champ)
{
   if(champ.value.length < 5)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
</script>

<script>
    function verifForm()
    {
        var pseudoOK = verifPseudo(pseudo)
        var passOK = verfiPass(pass)
        
        if (pseudoOK && passOK)
        {
            return true;
        }
        else
        {
            alert("Veuillez remplir les champs correctements");
            return false;
        }
    }
    
</script>
