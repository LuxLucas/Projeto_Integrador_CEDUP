program Viagem_Gasolina;

uses
  Vcl.Forms,
  U.Viagem_Gasolina in 'U.Viagem_Gasolina.pas' {frm_principal};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(Tfrm_principal, frm_principal);
  Application.Run;
end.
