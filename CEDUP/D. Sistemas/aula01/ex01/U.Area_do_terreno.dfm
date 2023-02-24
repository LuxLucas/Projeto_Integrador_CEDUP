object frm_principal: Tfrm_principal
  Left = 0
  Top = 0
  Caption = #193'rea do terreno'
  ClientHeight = 351
  ClientWidth = 212
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
  object lb_base: TLabel
    Left = 24
    Top = 24
    Width = 38
    Height = 17
    Caption = 'Base:'
  end
  object lb_altura: TLabel
    Left = 24
    Top = 88
    Width = 46
    Height = 17
    Caption = 'Altura:'
  end
  object lb_area: TLabel
    Left = 24
    Top = 200
    Width = 37
    Height = 17
    Caption = #193'rea:'
  end
  object lb_aviso1: TLabel
    Left = 23
    Top = 272
    Width = 166
    Height = 17
    Caption = 'Os valores devem estar'
    Color = clRed
    Font.Charset = ANSI_CHARSET
    Font.Color = clMaroon
    Font.Height = -7
    Font.Name = 'Sans Serif Collection'
    Font.Style = [fsBold]
    ParentColor = False
    ParentFont = False
  end
  object lb_aviso2: TLabel
    Left = 24
    Top = 295
    Width = 132
    Height = 17
    Caption = 'na mesma unidade'
    Color = clRed
    Font.Charset = ANSI_CHARSET
    Font.Color = clMaroon
    Font.Height = -7
    Font.Name = 'Sans Serif Collection'
    Font.Style = [fsBold]
    ParentColor = False
    ParentFont = False
  end
  object lb_aviso3: TLabel
    Left = 23
    Top = 318
    Width = 76
    Height = 17
    Caption = 'de medida.'
    Color = clRed
    Font.Charset = ANSI_CHARSET
    Font.Color = clMaroon
    Font.Height = -7
    Font.Name = 'Sans Serif Collection'
    Font.Style = [fsBold]
    ParentColor = False
    ParentFont = False
  end
  object txt_base: TEdit
    Left = 24
    Top = 47
    Width = 161
    Height = 25
    TabOrder = 0
  end
  object txt_altura: TEdit
    Left = 24
    Top = 111
    Width = 161
    Height = 25
    TabOrder = 1
  end
  object btn_calcular: TButton
    Left = 24
    Top = 152
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 2
    OnClick = btn_calcularClick
  end
  object txt_area: TEdit
    Left = 24
    Top = 223
    Width = 161
    Height = 25
    Enabled = False
    TabOrder = 3
  end
end
