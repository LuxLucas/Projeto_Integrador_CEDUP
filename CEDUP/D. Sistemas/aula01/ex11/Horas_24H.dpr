program Horas_24H;

uses
  Vcl.Forms,
  U.horas_24h in 'U.horas_24h.pas' {frm_principal};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(Tfrm_principal, frm_principal);
  Application.Run;
end.
