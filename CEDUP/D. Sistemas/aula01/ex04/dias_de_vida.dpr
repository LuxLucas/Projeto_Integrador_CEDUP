program dias_de_vida;

uses
  Vcl.Forms,
  U.dias_de_vida in 'U.dias_de_vida.pas' {frm_principal};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(Tfrm_principal, frm_principal);
  Application.Run;
end.
