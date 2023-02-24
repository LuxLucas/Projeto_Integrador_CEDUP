object frm_principal: Tfrm_principal
  Left = 0
  Top = 0
  BorderIcons = [biSystemMenu]
  BorderStyle = bsSingle
  Caption = 'F'#243'rmulas'
  ClientHeight = 309
  ClientWidth = 280
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  Position = poDesktopCenter
  PixelsPerInch = 96
  TextHeight = 17
  object lb_a: TLabel
    Left = 64
    Top = 32
    Width = 73
    Height = 17
    Caption = 'Valor de A:'
  end
  object lb_b: TLabel
    Left = 64
    Top = 96
    Width = 74
    Height = 17
    Caption = 'Valor de B:'
  end
  object lb_c: TLabel
    Left = 64
    Top = 160
    Width = 74
    Height = 17
    Caption = 'Valor de C:'
  end
  object txt_a: TEdit
    Left = 80
    Top = 55
    Width = 121
    Height = 25
    TabOrder = 0
  end
  object txt_b: TEdit
    Left = 80
    Top = 119
    Width = 121
    Height = 25
    TabOrder = 1
  end
  object txt_c: TEdit
    Left = 80
    Top = 183
    Width = 121
    Height = 25
    TabOrder = 2
  end
  object btn_calcular: TButton
    Left = 80
    Top = 224
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 3
    OnClick = btn_calcularClick
  end
end
