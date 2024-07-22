maisons([
        maison(_,_,_,_,_),
        maison(_,_,_,_,_),
        maison(_,_,_,_,_),
        maison(_,_,_,_,_),
        maison(_,_,_,_,_)
    ]).

appartient_à(X, [X|_]).
appartient_à(X, [_|L]) :- appartient_à(X, L).

est_à_gauche_de(A, B, [A, B|_]).
est_à_gauche_de(A, B, [_|Y]) :- est_à_gauche_de(A, B, Y).

est_à_côté_de(A, B, [A, B|_]).
est_à_côté_de(A, B, [B, A|_]).
est_à_côté_de(A, B, [_|Y]) :- est_à_côté_de(A, B, Y).

resoudre.
    maisons(MAISONS),
    appartient_à(maison(Rouge, Anglais, _, _, _), MAISONS),
    appartient_à(maison(_, Suédois, Chien, _, _), MAISONS),
    appartient_à(maison(_, Danois, _, Thé, _), MAISONS),
    est_à_gauche_de(maison(Verte, _, _, _, _), maison(Blanche, _, _, _, _), MAISONS),
    appartient_à(maison(Verte, _, _, Café, _), MAISONS),
    appartient_à(maison(_, _, Oiseaux, _, Pall_Mall), MAISONS),
    appartient_à(maison(Jaune, _, _, _, Dunhill), MAISONS),
    appartient_à(maison(_, Norvégien, _, _, _), MAISONS),
    est_à_côté_de(maison(_, _, _, _, Blend), maison(_, _, Chats, _, _), MAISONS),
    est_à_côté_de(maison(_, _, Cheval, _, _), maison(_, _, _, _, Dunhill), MAISONS),
    appartient_à(maison(_, _, _, Bière, Blue_Master), MAISONS),
    appartient_à(maison(_, Allemand, _, _, Prince), MAISONS),
    est_à_côté_de(maison(_, Norvégien, _, _, _), maison(Bleue, _, _, _, _), MAISONS),
    est_à_côté_de(maison(_, _, _, _, Blend), maison(_, _, _, Eau, _), MAISONS),
    appartient_à(maison(_, _, Poisson, _, _), MAISONS),
    afficher_liste(MAISONS).

afficher_liste([X|L]) :- writeln(X), afficher_liste(L).