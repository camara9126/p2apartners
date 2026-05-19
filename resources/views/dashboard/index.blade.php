<x-app-layout>
    
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #f0f4f8;
      font-family: 'Inter', sans-serif;
      color: #1e2a3e;
      padding: 24px 20px;
    }

    /* Layout principal */
    .dashboard-container {
      max-width: 1440px;
      margin: 0 auto;
    }

    /* HEADER */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 32px;
    }
    .logo-area h1 {
      font-family: 'Playfair Display', serif;
      font-size: 1.9rem;
      font-weight: 600;
      background: linear-gradient(135deg, #0B2B40, #1C4E6F);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      letter-spacing: -0.3px;
    }
    .logo-area p {
      font-size: 0.85rem;
      color: #2c6e9e;
      font-weight: 500;
      border-left: 3px solid #e8b23c;
      padding-left: 12px;
      margin-top: 6px;
    }
    .admin-badge {
      background: white;
      border-radius: 40px;
      padding: 8px 20px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.04);
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .admin-badge i {
      font-size: 1.4rem;
      color: #e8b23c;
    }
    .admin-badge span {
      font-weight: 600;
    }

    /* Stats cards */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-bottom: 32px;
    }
    .stat-card {
      background: white;
      border-radius: 28px;
      padding: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.02), 0 2px 6px rgba(0,0,0,0.05);
      transition: all 0.2s;
      border: 1px solid #e9edf2;
    }
    .stat-card .stat-title {
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 600;
      color: #5b6e8c;
    }
    .stat-number {
      font-size: 2.2rem;
      font-weight: 800;
      margin: 12px 0 4px;
      color: #0f2b3b;
    }
    .trend {
      font-size: 0.8rem;
      display: flex;
      align-items: center;
      gap: 6px;
      color: #2c7a4d;
    }
    .trend.down { color: #b91c1c; }

    /* onglets */
    .tabs {
      display: flex;
      gap: 6px;
      border-bottom: 2px solid #e2e8f0;
      margin-bottom: 28px;
      flex-wrap: wrap;
    }
    .tab-btn {
      background: transparent;
      border: none;
      padding: 12px 20px;
      font-weight: 600;
      font-size: 0.95rem;
      cursor: pointer;
      color: #4b5e77;
      transition: all 0.2s;
      border-radius: 30px;
    }
    .tab-btn i { margin-right: 8px; }
    .tab-btn.active {
      background: #1C4E6F;
      color: white;
      box-shadow: 0 6px 12px rgba(28,78,111,0.2);
    }
    .tab-pane {
      display: none;
      animation: fade 0.25s ease;
    }
    .tab-pane.active-pane {
      display: block;
    }
    @keyframes fade {
      from { opacity: 0; transform: translateY(6px);}
      to { opacity: 1; transform: translateY(0);}
    }

    /* tables & cards */
    .content-table {
      background: white;
      border-radius: 24px;
      overflow-x: auto;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
      border: 1px solid #eef2f6;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.85rem;
    }
    th {
      text-align: left;
      padding: 16px 16px;
      background: #fafcff;
      font-weight: 600;
      color: #1f3b4c;
      border-bottom: 1px solid #e2edf2;
    }
    td {
      padding: 14px 16px;
      border-bottom: 1px solid #f0f3f8;
      vertical-align: middle;
    }
    .status-badge {
      background: #e9f5eb;
      color: #1f7840;
      padding: 4px 10px;
      border-radius: 40px;
      font-size: 0.7rem;
      font-weight: 600;
      display: inline-block;
    }
    .status-badge.pending { background: #fff0db; color: #b45f06; }
    .status-badge.draft { background: #eef2ff; color: #2c3e66; }
    .action-icons i {
      margin: 0 6px;
      cursor: pointer;
      color: #7f8fa4;
      transition: 0.1s;
    }
    .action-icons i:hover { color: #1C4E6F; }

    /* formulaire publication */
    .form-card {
      background: white;
      border-radius: 28px;
      padding: 24px;
      margin-top: 20px;
      border: 1px solid #eef2f6;
    }
    .form-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }
    input, select, textarea {
      width: 100%;
      padding: 12px 14px;
      border-radius: 18px;
      border: 1px solid #cfddee;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
    }
    label {
      font-weight: 600;
      display: block;
      margin-bottom: 6px;
      font-size: 0.8rem;
    }
    .btn-primary {
      background: #0f2b3b;
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 34px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      margin-top: 10px;
    }
    .btn-primary:hover { background: #1f5377; transform: translateY(-1px); }

    /* calendrier simplifié */
    .calendar-mini {
      background: white;
      border-radius: 24px;
      padding: 20px;
    }
    .event-item {
      display: flex;
      justify-content: space-between;
      border-bottom: 1px solid #eef;
      padding: 12px 0;
    }

    /* footer */
    .footer-actions {
      margin-top: 40px;
      background: #f8fafd;
      border-radius: 20px;
      padding: 20px;
      text-align: center;
      font-size: 0.8rem;
    }

    @media (max-width: 680px) {
      .header { flex-direction: column; align-items: start; }
    }
  </style>
</head>
<body>
    <div class="dashboard-container mt-4">

        <!-- KPI rapides -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title">
                    📄 Articles publiés 
                </div>
                <div class="stat-number">{{ $posts->count() }}</div>
                <div class="trend">
                    <!--<i class="fas fa-arrow-up"></i> +2 vs mois préc.-->
                </div>
            </div>
            <!--<div class="stat-card">
                <div class="stat-title">
                    👁️ Vues totales contenu
                </div>
                <div class="stat-number">2 450</div>
                <div class="trend">
                    <i class="fas fa-chart-simple"></i> +18%
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-title">
                    🤝 Clients actifs
                </div>
                <div class="stat-number">187</div>
                <div class="trend">
                    🎯 objectif 200
                </div>
            </div>-->
            <div class="stat-card">
                <div class="stat-title">
                    📢 Méssages recus
                </div>
                <div class="stat-number">{{ $messages->count() }}</div>
                <div class="trend">
                    <!--<i class="fas fa-share-alt"></i> +30%-->
                </div>
            </div>
        </div>

        <!-- Navigation par onglets -->
        <div class="tabs">
            <button class="tab-btn active" data-tab="tab1">
                <i class="fas fa-newspaper"></i> Publications & éditorial
            </button>
            <button class="tab-btn" data-tab="tab2">
                <i class="fas fa-plus-circle"></i> Créer / Publier
            </button>
             <button class="tab-btn" data-tab="tab3">
                <i class="fas fa-box"></i> Categorie
            </button>
            <button class="tab-btn" data-tab="tab4">
                <i class="fas fa-calendar-alt"></i> Calendrier & planification
            </button>
            <button class="tab-btn" data-tab="tab5">
                <i class="fas fa-chart-pie"></i> Indicateurs cabinet
            </button>
            <button class="tab-btn" data-tab="tab6">
                <i class="fas fa-list"></i> Messages <pre class="badge bg-success">{{ $messages->count() }}</pre>
            </button>
        </div>

         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @elseif(Session::has('danger'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('danger') }}
            </div>
        @endif

        <!-- ================= PANEL 1 : GESTION DES CONTENUS ================= -->
        <div id="tab1" class="tab-pane active-pane">
            <div class="content-table">
                <table>
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Titre / Sujet</th> 
                        <th>Categorie</th>
                        <th>Statut</th>
                        <th>Date</th>
                        <th style="width:100px">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="publications-table-body">
                        @forelse($posts as $p)
                            <tr>
                                <td>{{ $p->type}}</td>
                                <td>{{ $p->titre}}</td>  
                                <td>{{ $p->categorie->nom ?? '-'}}</td>
                                <td>
                                    @if($p->statut)
                                        <span class="status-badge success">Publiee</span>
                                    @else
                                         <span class="status-badge pending">Non publiee</span>
                                    @endif
                                </td>
                                <td>{{ $p->date}}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $p) }}" class=" badge bg-warning"><i class="fas fa-edit" title="Afiicher/Modifier"></i></a>
                                    <!--<a href="{{ route('posts.destroy', $p) }}" class=" badge bg-danger"><i class="fas fa-trash-alt" title="Supprimer" onclick=""></i></a>-->
                                    <form action="{{ route('posts.destroy', $p) }}" type="button" method="post" onsubmit="return confirm('Supprimer ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    <!--<a href="{{ route('posts.show', $p) }}" class=" badge bg-info"><i class="fas fa-eye" title="Voir"></i></a>-->
                                    
                                </td>
                            </tr>
                        @empty
                            <td colspan="7" class="text-center"> données vide</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ================= PANEL 2 : FORMULAIRE DE PUBLICATION ================= -->
        <div id="tab2" class="tab-pane">
            <div class="form-card">
                <h3 style="margin-bottom: 20px;">
                    <i class="fas fa-feather-alt"></i> Nouvelle publication (Blog / Article / Actualité)
                </h3>
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label>Titre *</label>
                            <input type="text" name="titre" placeholder="Ex: Nouvelles obligations fiscales 2026">
                        </div>
                        <div>
                            <label>Type</label>
                            <select name="type">
                                <option value="Blog">📝 Blog</option>
                                <option value="Article">📑 Article</option>
                                <option value="Actualité">📰 Actualité</option>
                            </select>
                        </div>
                        <div>
                            <label>Catégorie</label>
                            <select name="categorie_id">
                                @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--<div>
                            <label>Visibilité</label>
                            <select id="pubVisibility">
                                <option value="Public">🔓 Public</option>
                                <option value="Clients connectés">🔒 Clients connectés</option>
                                <option value="Admin seulement">🔐 Admin seulement</option>
                            </select>
                        </div>-->
                        <div>
                            <label>Publication</label>
                            <select name="statut" id="">
                                <option value="1">Publier</option>
                                <option value="0">En attente</option>
                            </select>
                        </div>
                        <div>
                            <label>Image à la une (URL fictive)</label>
                            <input name="image" type="file">
                        </div>
                        <div>
                            <label>Date de publication</label>
                            <input type="date" name="date">
                        </div>
                        <div>
                            <label>Editeur</label>
                            <input type="text" name="editeur">
                        </div>

                        <div style="grid-column: span 2;">
                            <label>Contenu (extrait / éditeur simple)</label>
                            <textarea rows="4" name="contenu" placeholder="Rédiger un résumé ou le contenu principal..."></textarea>
                        </div>     
                    </div>
                    <div style="display: flex; gap: 16px; margin-top: 24px;">
                        <button class="btn-primary" type="submit">
                            <i class="fas fa-globe"></i> Publier
                        </button>
                    </div>
                </form> 
            </div>
        </div>

        <!-- ================= PANEL 3 : CATEGORIE ================= -->
        <div id="tab3" class="tab-pane">
            <div class="form-card">
                <h3 style="margin-bottom: 20px;">
                    <i class="fas fa-feather-alt"></i> Nouveau categorie
                </h3>
                <form action="{{ route('categorie.store') }}" method="post">
                    @csrf
                    <div class="form-grid">
                        <div>
                            <label>Nom *</label>
                            <input type="text" name="nom">
                        </div>
                    </div>
                    <div style="display: flex; gap: 16px; margin-top: 24px;">
                        <button class="btn-primary" type="submit">
                            <i class="fas fa-globe"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>

            <hr>

            <div class="content-table mt-3">
                <div class="form-card">
                    <h3 style="margin-bottom: 20px;">
                        <i class="fas fa-feather-alt"></i> Liste des  categories
                    </h3>
                    <table>
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th style="width:100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="publications-table-body">
                            @forelse($categories as $c)
                                <tr>
                                    <td>{{ $c->nom}}</td>
                                    <td>
                                        <!--<a href="#" class="badge bg-warning"><i class="fas fa-edit" title="Modifier" onclick=""></i></a>
                                        <a href="#" class="badge bg-danger"><i class="fas fa-trash-alt" title="Supprimer" onclick=""></i></a>
                                        <a href="#" class="badge bg-info"><i class="fas fa-eye" title="Voir"></i></a>-->
                                        <form action="{{ route('categorie.destroy', $p) }}" type="button" method="post" onsubmit="return confirm('Supprimer cette categorie ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="3" class="text-center">
                                    données Vide
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  

        <!-- ================= PANEL 4 : CALENDRIER ÉDITORIAL ================= -->
        <div id="tab4" class="tab-pane">
            <div class="calendar-mini">
                <h4>
                    <i class="fas fa-calendar-week"></i> Planning des publications à venir
                </h4>
                <div id="editorialCalendarList">
                    <!-- Rempli dynamiquement -->
                </div>
                <div style="margin-top: 20px;">
                    <i class="fas fa-info-circle"></i> Les contenus programmés apparaissent ici.
                </div>
            </div>
        </div>

        <!-- ================= PANEL 5 : INDICATEURS CABINET & PERFORMANCE ================= -->
        <div id="tab5" class="tab-pane">
            <div class="stats-grid" style="grid-template-columns: repeat(2,1fr);">
                <div class="stat-card">
                    <div class="stat-title">Dossiers d'audit en cours</div>
                    <div class="stat-number">23</div>
                </div>
            <div class="stat-card">
                <div class="stat-title">Associations & ONG accompagnées</div>
                <div class="stat-number">41</div>
                <div class="trend">objectif 45</div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Taux de conformité fiscale</div>
                <div class="stat-number">98%</div>
                <div class="trend"><i class="fas fa-check-circle"></i> +1%</div>
            </div>
            <div class="stat-card">
                <div class="stat-title">NPS (recommandation)</div>
                <div class="stat-number">+52</div>
                <div class="trend">🎯 > +60</div>
            </div>
        
            <div class="content-table" style="margin-top: 16px;">
                <table>
                    <thead>
                        <tr>
                            <th>Prochaine échéance légale</th>
                            <th>Date</th><th>Clients impactés</th>
                            <th>🔔 Alerte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Déclaration TVA mensuelle</td>
                            <td>20/04/2026</td>
                            <td>87 clients</td>
                            <td>
                                <span class="status-badge" style="background:#fbebc8;">Rappel envoyé</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Dépôt comptes annuels ASBL</td>
                            <td>30/04/2026</td>
                            <td>32 associations</td>
                            <td>
                                <span class="status-badge pending">À programmer</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>

              
            
         
        </div>

        <!-- ================= PANEL 6 : MESSAGES ================= -->
        <div id="tab6" class="tab-pane">
            <div class="content-table">
                <table>
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Sujet</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th style="width:100px">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="publications-table-body">
                        @forelse($messages as $m)
                            <tr>
                                <td>{{ $m->nom}}</td>
                                <td>{{ $m->email}}</td>
                                <td>{{ $m->sujet}}</td>
                                <td>{{ $m->message ?? '-'}}</td>
                                <td>{{ $m->created_at}}</td>
                                <td>
                                    <a href="{{ route('contactForm.edit', $m) }}" class="badge bg-info"><i class="fas fa-eye" title="Voir"></i></a>
                                    <form action="{{ route('contactForm.destroy', $m) }}" type="button" method="post" onsubmit="return confirm('Supprimer le message ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="7" class="text-center"> données vide</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    

    <script>

    // Gestion des onglets
    const tabs = document.querySelectorAll('.tab-btn');
    const panes = document.querySelectorAll('.tab-pane');
    tabs.forEach(btn => {
        btn.addEventListener('click', () => {
        const tabId = btn.getAttribute('data-tab');
        tabs.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        panes.forEach(pane => pane.classList.remove('active-pane'));
        document.getElementById(tabId).classList.add('active-pane');
        });
    });

    loadFromLocal();
    </script>
</x-app-layout>

</body>
</html>