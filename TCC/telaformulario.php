<?php require_once 'util/header.php'; ?>
  <link href="<?php echo(constant("BASE_URL")); ?>css/formulario.css" rel="stylesheet" media="all">
  <div class='container bg-section well form-horizontal'>
    <div class='row hidden-print'>
        <div class="col-xs-6" tabindex="">
             <h3><strong>Dicas de Navegação</strong></h3>
           <p>
              Para navegar neste site utilize as teclas:<br>
                TAB: Próximo campo.<br>
                SHIFT e TAB: Campo anterior.<br>
                SHIFT e + (Mais): Aumenta o tamanho da fonte.<br> 
                SHIFT e - (Menos):Diminue o tamanho da fonte.<br>
                SHIFT e 0 : Tamanho original da fonte.<br>
                SHIFT e ESC: Habilita e desabilita alto contraste.<br> 
           </p>
        </div> 
        <div class='col-xs-6'>
            <a href='candidatoinicial.php' class='btn btn-primary btn-sair pull-right' role='button' tabindex=""><span class='glyphicon glyphicon-share-alt'> <strong>Voltar</strong></span></a>
        </div>
    </div>
  <main role="main">
    <form method="post" action="">
      <h1 align="center" tabindex="">
        FICHA DE CADASTRO A CANDIDATO A USUÁRIO DE CÃO-GUIA DA REGIÃO SUL 
      </h1>
      <h2 tabindex="">
        Dados Cadastrais
      </h2>
      <div class="divisao" id="dBasico">
        <div class="input-holder">
          <label for="cpf">CPF:</label>
          <input id="cpf" type="text" name="cpf" maxlength="14" placeholder="Digite seu CPF aqui...">
        </div>
        <div class="input-holder">
          <label for="rg" >RG:</label>
          <input id="rg" type="text" name="rg" placeholder="Digite seu RG aqui.."maxlength="12">
        </div>
        <div class="input-holder">
          <label for="orgaoemissor">Orgão Emissor:</label>
          <select  id="orgaoemissor"  name="orgaoemissor"  >
            <option value="op">Selecione seu Orgão Emissor</option>
            <option value="SSP">SSP - Secretaria de Segurança Pública</option>
            <option value="COREN">COREN - Conselho Regional de Enfermagem</option>
            <option value="CRA">CRA - Conselho Regional de Administração</option>
            <option value="CRAS">CRAS - Conselho Regional de Assistentes Sociais</option>
            <option value="CRB">CRB - Conselho Regional de Biblioteconomia</option>
            <option value="CRC">CRC - Conselho Regional de Contabilidade</option>
            <option value="CRE">CRE - Conselho Regional de Estatística</option>
            <option value="CREA">CREA - Conselho Regional de Engenharia Arquitetura e Agronomia</option>
            <option value="CRECI">CRECI - Conselho Regional de Corretores de Imóveis</option>
            <option value="CREFIT">CREFIT - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
            <option value="CRF">CRF - Conselho Regional de Farmácia</option>
            <option value="CRM">CRM - Conselho Regional de Medicina</option>
            <option value="CRN">CRN - Conselho Regional de Nutrição</option>
            <option value="CRO">CRO - Conselho Regional de Odontologia</option>
            <option value="CRP">CRP - Conselho Regional de Psicologia</option>
            <option value="CRPRE">CRPRE - Conselho Regional de Profissionais de Relações Públicas</option>
            <option value="CRQ">CRQ - Conselho Regional de Química</option>
            <option value="CRRC">CRRC - Conselho Regional de Representantes Comerciais</option>
            <option value="CRMV">CRMV - Conselho Regional de Medicina Veterinária</option>
            <option value="DPF">DPF - Polícia Federal</option>
            <option value="EST">EST - Documentos Estrangeiros</option>
            <option value="I CLA">I CLA - Carteira de Identidade Classista</option>
            <option value="MAE">MAE - Ministério da Aeronáutica</option>
            <option value="MEX">MEX - Ministério do Exército</option>
            <option value="MMA">MMA - Ministério da Marinha</option>
            <option value="OAB">OAB - Ordem dos Advogados do Brasil</option>
            <option value="OMB">OMB - Ordens dos Músicos do Brasil</option>
            <option value="IFP">IFP - Instituto de Identificação Félix Pacheco</option>
            <option value="OUT">OUT - Outros Emissores</option>
          </select>
        </div> 
        <div class="input-holder">
          <label for="nome">Nome:</label>
          <input id="nome" type="text" name="nome" placeholder="Digite seu Nome aqui..." >
        </div>
        <div class="input-holder">
          <label for="nascimento">Data de Nascimento:</label>
          <input id="nascimento" type="date" name="nascimento" placeholder="dd/mm/aaaa" > 
        </div>
        <div class="input-holder">
          <label for="email">E-mail:</label>
          <input  id="email" type="email" name="email" placeholder="Digite seu Email aqui..." >
        </div>  <!-- ------Acaba dados Iniciais------- -->
      </div> 
      <div class="divisao" id="dPessoa"> <!-- inicia  dados cadastrais aquiii -->
        <div class="input-holder">
          <label for="estadocivil">Estado Civil:</label>
          <select  id="estadocivil"  name="estadocivil">
            <option value="op">Selecione o seu Estado Civil</option>
            <option value="solteiro">Solteiro</option>
            <option value="estavel">União Civil Estável</option>
            <option value="casado">Casado</option>
            <option value="divorciado">Divorciado</option>
            <option value="viuvo">Viúvo</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="peso">Peso:</label>
          <input id="peso" type="text" name="peso" placeholder="Digite seu Peso aqui..." >
        </div>
        <div class="input-holder">
          <label for="altura">Altura:</label>
          <input id="altura" type="text" name="altura" placeholder="Digite sua Altura aqui..." maxlength="4">
        </div>
        <div class="input-holder">
          <label for="graudeinstrucao">Grau de Instrução:</label>
          <input  id="graudeinstrucao" type="text" name="graudeinstrucao" placeholder="Digite seu Grau de Instrução aqui..." >
        </div>

        <div class="input-holder">
          <label for="facebook">Facebook:</label>
          <input  id="facebook" type="text" name="facebook" placeholder="Digite seu Facebook aqui...">
        </div>
      </div>  <!-- Acaba Dados Cadastrais -->
      <!-- ************************************************************************       -->
      <!-- Inicio Endereço -->
      <h2>
        Endereço
      </h2> 
      <div class="divisao" id="dEndereco"> 
        <div class="input-holder">
          <label for="rua">Rua:</label>
          <input  id="rua" type="text" name="rua" placeholder="Digite o nome de sua Rua aqui...">
        </div>
        <div class="input-holder">
          <label for="bairro">Bairro:</label>
          <input  id="bairro" type="text" name="bairro" placeholder="Digite o nome de seu Bairro aqui...">
        </div>
        <div class="input-holder">
          <label for="cidade">Cidade:</label>
          <input  id="cidade" type="text" name="cidade" placeholder="Digite o nome de sua Cidade aqui...">
        </div>
        <div class="input-holder">
          <label for="cep">CEP:</label>
          <input  id="cep" type="text" name="cep" placeholder="Digite seu CEP aqui..." maxlength="10">
        </div>
        <div class="input-holder">
          <label for="estado">Estado:</label>
          <select  id="estado"  name="estado" >
            <option value="op">Selecione o seu Estado</option>
            <option value="PR">Paraná - PR</option>
            <option value="RS">Rio Grande do Sul - RS</option>
            <option value="SC">Santa Catarina - SC</option>
          </select>
        </div>
      </div>   <!-- Fim Endereço -->
      <!-- ************************************************************************       -->
      <!-- Inicio Contato"!-->
      <h2>
        Contato
      </h2>
      <div class="divisao">  
        <div class="input-holder hide-telefone" >
          <label for="telefone">Telefone:</label>
          <input  id="telefone" type="text" name="telefone" placeholder="Digite o numero de seu Telefone aqui..."  maxlength="14" >
        </div>
        <div class="input-holder">
          <label for="celular" >Celular:</label>
          <input  id="celular" type="text" name="celular" placeholder="Digite o nome de seu Celular aqui..." maxlength="15">
        </div>
        <div class="input-holder">
          <label for="meio">Meio de Comunicação Preferido:</label>
          <select    id="meio" name="meio">
            <option value="op">Selecione o Meio de Comunicação preferido</option>
            <option value="impGrande">Impressão Grande</option>
            <option value="arqDigital">Arquivo Digital</option>
            <option value="braille">Braille</option>
            <option value="emailpr">E-mail</option>
            <option value="cel">Celular</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="emancipado">Caso tenha entre 16 e 18 anos, é emancipado para exercicio dos atos da vida civil?</label>
          <select   id="emancipado" name="emancipado">
            <option value="op">É emancipado?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
      </div> <!-- Fim Contato -->
      <!-- ************************************************************************       -->
      <!-- Inicia Pessoa Referencia -->
      <h2>
        Pessoa de Referência
      </h2>
      <div class="divisao" id="dPessoa_Ref"> 

      </div>
      <button onclick="teste()"> Clique para Adicionar  Pessoa</button>
      <!-- ************************************************************************       -->
      <h2> 
        Fonte de Renda
      </h2>
      <div class="divisao" id="dFont_renda"> <!-- Inicia Fonte de Renda -->
        <div class="input-holder">
          <label for="trabalha">Trabalha?</label>
          <select  id="trabalha" name="trabalha" onchange="optionCheck1()" >
            <option value="op">Trabalha?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder hide-trabalha">
          <label for="profissao" >Profissão:</label>
          <input  id="profissao"  type="text" name="profissao" placeholder="Digite sua Profissão aqui..."  >
        </div>
        <div class="input-holder hide-trabalha">
          <label for="nomeE">Nome da Empresa:</label>
          <input  id="nomeE"  type="text" name="nomeE" placeholder="Digite o nome da Empresa aqui..." >
        </div>
        <div class="input-holder hide-trabalha">
          <label for="enderecoE">Endereço de Trabalho:</label>
          <input  id="enderecoE"  type="text" name="enderecoE" placeholder="Digite o Endereço de Trabalho aqui..." >
        </div>
        <div class="input-holder hide-trabalha hide-telefone">
          <label for="telefoneE">Telefone:</label>
          <input  id="telefoneE"  type="text" name="telefoneE" placeholder="Digite o número de Telefone aqui..."  maxlength="14" masktel >
        </div>
        <div class="input-holder hide-trabalha">
          <label for="celularE">Celular:</label>
          <input  id="celularE" type="text" name="celularE" placeholder="Digite o número de Celular aqui..."  maxlength="15">
        </div>
        <div class="input-holder hide-trabalha">
          <label for="emailE">Email:</label>
          <input  id="emailE" type="text" name="emailE" placeholder="Digite seu Email aqui..." >
        </div>
        <div class="input-holder">
          <label for="aposentado">É aposentado?</label>
          <select  id="aposentado" name="aposentado" >
            <option value="op">É aposentado?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="beneficiario">É beneficiário do Benefício de Prestação Continuada – BPC?</label>
          <select  id="beneficiario" name="beneficiario" >
            <option value="op">É beneficiário do Benefício de Prestação Continuada – BPC?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder" onchange="optionCheck2()">
          <label for="fonteR">Possui outra fonte de renda?</label>
          <select  id="fonteR" name="fonteR" >
            <option value="op">Possui outra fonte de renda?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder hide-fonteR">
          <label for="outrafonteR">Descreva sua outra fonte de renda:</label>
          <textarea  id="outrafonteR" type="textarea" name="outrafonteR" placeholder="Digite a Fonte de Renda aqui..."  ></textarea>
        </div>
        <div class="input-holder">
          <label for="suporte">É capaz de garantir suporte financeiro ao cão-guia, aproximadamente meio salário mínimo?</label>
          <select  id="suporte" name="suporte" >
            <option value="op">É capaz de garantir suporte financeiro ao cão-guia? </option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value= "Auxilio"> Necessita de Auxilio Financeiro</option>
          </select>
        </div>
      </div>  
      <h2>
        Residentes na Casa 
      </h2>
      <div class="divisao" id="dRes_Casa"> 
        <div class="input-holder">
          <label for="alergico">Você é alérgico a pelo de cães?</label>
          <select   id="alergico" name="alergico" >
            <option value="op">Você é alérgico a pelo de cães?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="alergicoM">Algum morador é alérgico a pelo de cães?</label>
          <select  id="alergicoM" name="alergicoM" >
            <option value="op">Algum morador é alérgico a pelo de cães?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="ciente">Todos estão CIENTES de que o cão ira morar dentro de casa?</label>
          <select  id="ciente" name="ciente" >
            <option value="op">Todos estão CIENTES que o cão ira morar dentro de casa?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="apoio">A família apoia a ideia de conviver com um cão-guia dentro de casa?</label>
          <select  id="apoio" name="apoio" >
            <option value="op">A família apoia a ideia de conviver com um cão-guia?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="responsabilidade">A família aprecia as responsabilidades envolvidas com o cão-guia?</label>
          <select  id="responsabilidade" name="responsabilidade" >
            <option value="op">A família aprecia as responsabilidades do cão-guia?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder" id="Relacao_Casa">
          <label for="dependenteRes">Dependente S/N:</label>
          <select id="dependenteRes"  name="dependenteRes">
            <option value="op">Dependentes Sim/Não:</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select> 
        </div>
        <div class="input-holder">
          <label for="parentescoRes">Parentesco:</label>
          <input id="parentescoRes" type="text" name="parentescoRes" placeholder="Grau de Parentesco">
        </div>
      </div>
      <button onclick="clone()"> Clique para Adicionar  Pessoa</button>  
      <h2>
        Ambiente Doméstico
      </h2>
      <div class="divisao">
        <div class="input-holder">
          <label for="tipoR">Tipo de Residência:</label>
          <select  id="tipoR" name="tipoR" >
            <option value="op">Selecione o Tipo de Residência</option>
            <option value="casa">Casa</option>
            <option value="apartamento">Apartamento</option>
            <option value="chacara">Chácara</option>
          </select>
        </div>
        <div class="input-holder">
          <label  for="residencia">Residência:</label>
          <select  id="residencia" name="residencia"  >
            <option value="op">Selecione se a Residência é</option>
            <option value="propria">Propria</option>
            <option value="alugada">Alugada</option>
            <option value="cedida">Cedida</option>
          </select>
        </div>
        <div class="input-holder">
          <label  for="cercaR">Residência é cercada?</label>
          <select  id="cercaR" name="cercaR" >
            <option value="op">Residência é cercada?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="seguranca">Oferece segurança para o cão?</label>
          <select  id="seguranca" name="seguranca" >
            <option value="op">Oferece segurança para o cão?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="espaco">Há espaço para recreação do cão?</label>
          <select  id="espaco" name="espaco" >
            <option value="op">Há espaço para recreação do cão?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="estimacao">Há animais de estimação como cães, gatos, aves, repteis, anfíbios?</label>
          <select  id="estimacao" name="estimacao" onchange="optionCheck3()">
            <option value="op">Há animais de estimação?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder hide-estimacao">
          <label for="animais">Quais animais de estimação possui?</label>
          <textarea  id="animais" type="textarea" name="animais" placeholder="Descreva quais animais de estimação possui" ></textarea>
        </div>
        <div class="input-holder hide-estimacao">
          <label for="vacina">Os animais estão com as vacinas em dia?</label>
          <select  id="vacina" name="vacina" >
            <option value="op">Os animais estão com as vacinas em dia?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder hide-estimacao">
          <label for="cao">Caso haja cães, descreva as características dos mesmos (raça, porte, nível de dominância):</label>
          <textarea  id="cao" type="textarea" name="cao" placeholder="Caso haja cães, descreva as características dos mesmos (raça, porte, nível de dominância):"></textarea>
        </div>
        <h2 >
          Perspectivas do Candidato
        </h2>
        <div class="divisao">
          <div class="input-holder">
            <label for="ifc">Como tomou conhecimento sobre o “Programa Cão-Guia” do IFC?</label>
            <textarea  id="ifc" type="textarea" name="ifc" placeholder="Como tomou conhecimento sobre o “Programa Cão-Guia” do IFC?"></textarea>
          </div>
          <div class="input-holder">
            <label for="decisao">A decisão de ter um cão-guia é exclusivamente sua?</label>
            <select  id="decisao" name="decisao" >
              <option value="op">A decisão de ter um cão-guia é exclusivamente sua?</option>
              <option value="sim">Sim</option>
              <option value="nao">Não</option>
            </select>
          </div>
          <div class="input-holder">
            <label for="contrario">Há amigos e/ou familiares contrários à sua decisão?</label>
            <select  id="contrario" name="contrario" >
              <option value="op">Há amigos e/ou familiares contrários à sua decisão?</option>
              <option value="sim">Sim</option>
              <option value="nao">Não</option>
            </select>
        </div>
        <div class="input-holder">
          <label for="mudar">Pretende mudar de residência nos próximos 12 meses?</label>
          <select  id="mudar" name="mudar" >
            <option value="op">Pretende mudar de residência nos próximos 12 meses?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="motivos">Que motivos te levaram a se interessar a ser um usuário de Cão-Guia?</label>
          <textarea  id="motivos" type="textarea" name="motivos" placeholder="Descreva os motivos que te levaram a se interessar a ser um usuário de Cão-Guia?" ></textarea>
        </div>
        <div class="input-holder">
          <label for="planos">Quais são seus planos e perspectivas para os próximos 2 anos? (trabalho, estudo, viagens)</label>
          <textarea  id="planos"  type="textarea" name="planos" placeholder="Descreva quais são seus planos e perspectivas para os próximos 2 anos? (trabalho, estudo, viagens)"></textarea>
        </div>
        <div class="input-holder">
          <label for="mudanca">O que você acredita que mudará em sua vida, caso você se torne um usuário de Cão-Guia?</label>
          <textarea  id="mudanca" type="textarea" name="mudanca" placeholder="O que você acredita que mudará em sua vida, caso você se torne um usuário de Cão-Guia?"></textarea>
        </div>
    </div>
        <h2>
          Saúde
        </h2>
    <div class="divisao">
        <div class="input-holder">
          <label for="deficienciaD">Tipo de deficiência do olho DIREITO</label>
          <textarea id="deficienciaD" type="textarea" name="deficienciaD" placeholder="Descreva o Tipo de deficiência do olho DIREITO" ></textarea>
        </div>
        <div class="input-holder">
          <label for="visualD">Condição visual do olho DIREITO</label>
          <select  id="visualD" name="visualD" >
            <option value="op">Condição visual do olho DIREITO</option>
            <option value="cegototal">Cego Total</option>
            <option value="baixavisao">Baixa Visão</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="prognosticoD">Prognóstico do olho DIREITO</label>
          <select  id="prognosticoD" name="prognosticoD" >
            <option value="op">Prognóstico do olho DIREITO</option>
            <option value="estavel">Estável</option>
            <option value="progressiva">Progressiva</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="dataD">Data da perda total da visão do olho DIREITO</label>
          <textarea id="dataD" type="text" name="dataD" placeholder="Descreva a data aproximadamente da perda da visão do olho DIREITO"></textarea>
        </div>
        <div class="input-holder">
          <label for="causaD">Causa da perda da visão do olho DIREITO</label>
          <input id="causaD" type="text" name="causaD" placeholder="Descreva a causa da perda da visão do olho DIREITO" >
        </div>
        <div class="input-holder">
          <label for="deficienciaE">Tipo de deficiência do olho ESQUERDO</label>
          <input id="deficienciaE" type="text" name="deficienciaE" placeholder="Descreva o tipo de deficiência do olho ESQUERDO">
        </div>
        <div class="input-holder">
          <label for="visualE">Condição visual do olho ESQUERDO</label>
          <select  id="visualE" name="visualE" >
            <option value="op">Condição visual do olho ESQUERDO</option>
            <option value="cegototal">Cego Total</option>
            <option value="baixavisao">Baixa Visão</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="prognosticoE">Prognóstico do olho ESQUERDO</label>
          <select  id="prognosticoE" name="prognosticoE" >
            <option value="op">Prognóstico do olho ESQUERDO</option>
            <option value="estavel">Estável</option>
            <option value="progressiva">Progressiva</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="dataE">Data da perda total da visão do Olho ESQUERDO</label>
          <textarea id="dataE" type="textarea" name="dataE" placeholder="Descreva a data aproximadamente da perda da visão do olho ESQUERDO"></textarea>
        </div>
        <div class="input-holder">
          <label for="causaE">Causa da perda da visão do olho ESQUERDO</label>
          <textarea id="causaE" type="textarea" name="causaE" placeholder="Descreva a causa da perda da visão do olho ESQUERDO" ></textarea>
        </div>
        <div class="input-holder">
          <label for="problema">Possui algum outro problema de saúde ou deficiência física?</label>
          <textarea id="problema" type="textarea" name="problema" placeholder="Descreva caso possua algum outro problema de saúde ou deficiência física"></textarea>
        </div>
        <div class="input-holder">
          <label for="assistivas"> Utiliza bengala ou outras tecnologias assistivas?
          </label>
          <select  id="assistivas" name="assistivas" >
            <option value="op">Utiliza bengala ou outras tecnologias assistivas?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder">
          <label for="mobilidade">Possui orientação e mobilidade, ou seja, consegue ir e vir de forma autonoma fazendo uso apenas da bengala?
          </label>
          <select  id="mobilidade" name="mobilidade" >
            <option value="op">Possui orientação e mobilidade?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="guia">Preciso de um guia vidente</option>
          </select>
        </div>
    </div>
        <h2>
          Reposição de Cão-Guia 
        </h2>
    <div class="divisao">
        <div class="input-holder">
          <label for="usuario">Foi ou é usuário de Cão-Guia?
          </label>
          <select  id="usuario" name="usuario" onchange="optionCheck4()">
            <option value="op">Foi ou é usuário de Cão-Guia?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="input-holder hide-usuario">
          <label for="tempo">Por quanto tempo?</label>
          <input  id="tempo" type="text" name="tempo" placeholder="Por quanto tempo?">
        </div>
        <div class="input-holder hide-usuario">
          <label for="raca">Qual a raça do cão?</label>
          <input  id="raca" type="text" name="raca" placeholder="Qual a raça do cão?">
        </div>
        <div class="input-holder hide-usuario">
          <label for="instituicao ">Por qual instituição foi treinado o cão que você utiliza ou utilizou? De qual país?</label>
          <input  id="instituicao" type="text" name="instituicao" placeholder="Por qual instituição foi treinado o cão que você utiliza ou utilizou? De qual país?">
        </div>
        <div class="divisao">
        <h2 class="removivel">
          Comprometimento do Usuário
        </h2>
        <div class="input-holder removivel no-print">
          <label for="disponibilidade">
            Caso futuramente seja selecionado para fazer o curso de formação de dupla, você possui disponibilidade para permanecer no Centro de Formação de Treinadores e Instrutores de Cães-Guia(CFTICG), por aproximadamente 30 dias, com a disponibilização de alojamento pelo CFTICG, para a formação da dupla (usuário e cão-guia)?
          </label>
          <select  id="disponibilidade" name="disponibilidade" >
            <option value="op">Caso seja selecionado possui diponibilidade?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
      </div>
        <!-- <h2 class="no-print">  -->
        <!-- </h2> -->
        <!-- <button class="enviar removivel no-print">Enviar</button>
        <button class="imprimir no-print" id="imprimir" onClick="window.print()" style="visibility: hidden;" >Imprimir</button> -->
    </form>
   </main>
   <script type="text/javascript">
     document.querySelector('form').addEventListener('submit', ev => ev.preventDefault())
   </script>
  </div>    
<?php require_once 'util/footer.php'; ?> 