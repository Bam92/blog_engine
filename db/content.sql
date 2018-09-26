insert into t_post values
(1, 'Festival Ngoma 8', 'Hi there! This is the very first article. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2018-08-08 05:18:55');
insert into t_post values
(2, 'Concours de danse avec Dankis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit mauris ac porttitor accumsan.
  Nunc vitae pulvinar odio, auctor interdum dolor. Aenean sodales dui quis metus iaculis, hendrerit vulputate lorem vestibulum. Suspendisse pulvinar, purus at euismod semper, nulla orci pulvinar massa, ac placerat nisi urna eu tellus. Fusce dapibus rutrum diam et dictum. Sed tellus ipsum, ullamcorper at consectetur vitae, gravida vel sem. Vestibulum pellentesque tortor et elit posuere vulputate. Sed et volutpat nunc. Praesent nec accumsan nisi, in hendrerit nibh. In ipsum mi, fermentum et eleifend eget, eleifend vitae libero. Phasellus in magna tempor diam consequat posuere eu eget urna. Fusce varius
  nulla dolor, vel semper dui accumsan vitae. Sed eget risus neque.', '2018-08-08 09:18:55');
insert into t_post values
(3, 'La blouse roumaine', "J’en dis autant de ceux qui, par mollesse d’esprit, c’est-à-dire par la crainte de la peine
  et de la douleur, manquent aux devoirs de la vie. Et il est très facile de rendre raison de ce que j’avance. Car,
  lorsque nous sommes tout à fait libres, et que rien ne nous empêche de faire ce qui peut nous donner le plus de plaisir, nous pouvons nous livrer entièrement à la volupté et chasser toute sorte de douleur ; mais, dans les temps destinés aux devoirs de la société ou à la nécessité des affaires, souvent il faut faire divorce avec la volupté, et ne se point refuser à la peine. La règle que suit en cela un homme sage, c’est de renoncer à de légères voluptés pour en avoir de plus grandes, et de savoir supporter des douleurs légères pour en éviter de plus fâcheuses.", '2018-08-09 05:08:55');

insert into t_comment values
(1, 'Great! Keep up the good work.', 1, 'abel', '2018-08-08 15:18:55');
insert into t_comment values
(2, "Thank you, I'll try my best.", 1, 'carel', '2018-08-08 09:18:55');
insert into t_comment values
(3, 'Great! Keep up the good work.', 2, 'abel', '2018-08-08 15:18:55');
insert into t_comment values
(4, "Thank you, I'll try my best.", 3, 'carel', '2018-08-08 09:18:55');
insert into t_comment values
(5, 'Great! Keep up the good work.', 2, 'abel', '2018-08-09 05:18:55');
insert into t_comment values
(6, "Thank you, I'll try my best.", 1, 'carel', '2018-08-18 09:18:55');

insert into t_tag values
  (1, 'science'),
  (2, 'langue'),
  (3, 'homme'),
  (4, 'jury'),
  (5, 'wordpress'),
  (6, 'wikipedia');

insert into t_pst_tag values
  (1, 1),
  (1, 2),
  (2, 1),
  (3, 1),
  (2, 2),
  (3, 5);
