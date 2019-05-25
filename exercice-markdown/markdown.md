

# Qu'est ce que le Markdown ?

**Marckdown** est un language de balisage léger créer en 2004 par John Gruber avec Aaron Swartz.
Son but est d'offrir une syntaxe facile à lire et à écrire.
Un document balisé par Markdown peut être lu en l'état sans donner l'impression d'avoir été balisé ou formaté
par des instructions particulières.
Il est couramment utilisé pour les fichiers de documentation d’un projet ou d’un jeu de données -souvent nommé readme.md.
Il est stocké au format texte classique et est plus léger que sa version interprétée puisqu’il ne contient pas les balises html.
Les fichiers sont généralement enregistrés avec l’extension .md (ou .markdown ) pour indiquer aux interpréteur la nature du texte qu’il vont lire ; mais ça n’a rien d’obligatoire.

## Un peu d'histoire

Ce language a été créé en 2004 par John Gruber et Aaron Swartz et n’a pas évolué depuis. Même si de nombreuses extensions et “extras” sont venues se greffer au projet originel.
Le projet initial avec sa documentation est sur daringfireball.
Dès le départ, Gruber a écrit un script Perl pour convertir du texte markdown en XHTML. C’est tout l’intérêt du système : éditer un fichier texte simple avec quelques caractères spéciaux supplémentaires,
puis le faire passer dans un script qui va l’enrichir des balises requises pour l’afficher mise en forme dans le navigateur.

# Syntaxe de Markdown

>Dans l'ensemble, la syntaxe sur Markdown, ce n'est pas sorcier! 

> Pour les titres, on les commence par un # . Plus on en met, plus le titre est petit. 

>Pour comparer à HTML, si on met un # cela correspond à un H1 et si on met 3 # cela correspond à un H3

> Ensuite pour marquer l'importance d'un mot ou d'un groupe de mot on peut

> 1. Le mettre en *italique* en le mettant entre 2 asteriscs

> 2. Le mettre en **gras** en mettant 2 asteriscs avant et après la partie à mettre en gras

> 3.Le mettre en ***gras italique*** en précédant le groupe de mots de 3 astériscs et le terminant de la même façon. 

> Plus compliqué : pour créer un tableau on doit "le dessiner" avec des tiraits et 

>![](https://zupimages.net/up/19/03/wibs.png)

>![](https://zupimages.net/up/19/03/ddg9.gif)

> Pour insérer une image le code est le suivant : ! [] (le_lien_de_l'image_a_afficher)

> Et pour finir si on veut afficher un bloc de code en couleur, c'est on ne peut plus simple : on commence par 3 accents graves ` , on précise dans quel langage on parle puis à la ligne et on tape son code puis on ferme le tout avec a nouveau 3 accents graves. 

``` html
<html>
 <body>
	<h1>Coucou</h1>
 </body>
</html>
```

Lien vers notre document sur l'environnement d'apprentissage optimal : (https://github.com/Myokori/exercice-markdown/blob/master/EOA.md)
