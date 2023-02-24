program posto;

uses
  Vcl.Forms,
  U.gasolina in 'U.gasolina.pas' {frm_gasolina};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(Tfrm_gasolina, frm_gasolina);
  Application.Run;
end.
