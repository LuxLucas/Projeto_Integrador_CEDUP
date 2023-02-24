program Convertendo_Dinheiro;

uses
  Vcl.Forms,
  U.conversao_dinheiro in 'U.conversao_dinheiro.pas' {frm_principal};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(Tfrm_principal, frm_principal);
  Application.Run;
end.
