program Saque_Banco;

uses
  Vcl.Forms,
  U.Saque_Banco in 'U.Saque_Banco.pas' {frm_principal};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(Tfrm_principal, frm_principal);
  Application.Run;
end.
